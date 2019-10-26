<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class test extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('AdminViews.master')->with([
            'project'=>$projects
        ]);
    }
}
