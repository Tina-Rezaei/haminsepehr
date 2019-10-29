<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Input as input;
use League\Flysystem\Filesystem;
use \File;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $projects = Project::paginate(3);
        $projects->map(function ($project){
            if (strlen(strip_tags($project->body))>50){
                $project->body = mb_substr(strip_tags($project->body),0,50).'...';
                return $project;
            }
        });
        return view('AdminViews.Projects.ProjectsList')->with([
            'projects'=>$projects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminViews.Projects.AddProject');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation of input fields
        $request->validate([
            'title' => 'required|unique:projects|max:100',
            'body' => 'nullable|max:4000',
            'thumbnailimg' => 'image|between:0,100'
        ]);


        //check and fix image's size
        if($request->hasFile('thumbnailimg')) {
            $thumbnail_name = time().'.'.$request->file('thumbnailimg')->getClientOriginalName();
            $thumbnailimg = Image::make($request->file('thumbnailimg')->getRealPath());
            $thumbnailimg->resize(400,null,function ($constraint){
               $constraint->aspectRatio();
            });
            $thumbnailimg->save(public_path('images/projects/'.$thumbnail_name));
        }else{
            $thumbnail_name = 'default.gif';
        }


//        $thumbnailimg = $request->file('thumbnailimg')->storeAs('public',$thumbnail_name);
        $project = new Project();
        $project->title =  $request->title;
        $project->body =  $request->body;
        $project->coverimg =  '';
        $project->thumbnailimg = 'images/projects/'.$thumbnail_name;
        $project->save();

        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('AdminViews.Projects.ShowProject');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::where('id','=',$id)->get();
        return view('AdminViews.Projects.EditProject')->with(['project'=>$project[0]]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $project = Project::find($id);
        if($project){
            if($request->hasFile('thumbnailimg')){
                if($project->thumbnailimg !== 'images/projects/default.gif') {
                    $project_image = public_path($project->thumbnailimg);
                    File::delete($project_image);
                }
                $thumbnail_name = time().'.'.$request->file('thumbnailimg')->getClientOriginalName();
                $thumbnailimg = Image::make($request->file('thumbnailimg'));
                $thumbnailimg->save(public_path('images/projects/'.$thumbnail_name));
                $project->thumbnailimg = 'images/projects/'.$thumbnail_name;

            }
            $project->title = $request->title;
            $project->body = $request->body;
            $project->save();
            return redirect()->route('projects.index');
        }
        return redirect()->route('projects.index')->with('message','Something went wrong, please try again');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        if($project){
            $project_image = public_path($project->thumbnailimg);
            File::delete($project_image);
        }
        Project::where('id','=',$id)->delete();
        return redirect()->route('projects.index');
    }
}
