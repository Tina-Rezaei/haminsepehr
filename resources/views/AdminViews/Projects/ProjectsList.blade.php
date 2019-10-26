@extends('AdminViews.master')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>پروژه ها</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="table-responsive">
                        <table class="table ">
                            <colgroup>
                                <col span="1" style="width: 10%;">
                                <col span="1" style="width: 20%;">
                                <col span="1" style="width: 55%;">
{{--                                <col span="1" style="width: 10%;">--}}
                                <col span="1" style="width: 15%;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th style="min-width: 100px"></th>
                                    <th>عنوان</th>
                                    <th style="max-width: 100px" >محتوا</th>
{{--                                    <th >نام کاربری</th>--}}
                                    <th >عملیات</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($projects as $project)
                                <tr>
                                    <td style="vertical-align:middle" ><div  style="background-image:url('{{asset($project["thumbnailimg"])}}');max-width:100%;height: 80px" class="mygallery" alt="project image"></div> </td>
                                    <td style="vertical-align:middle">{{ $project['title'] }}</td>
                                    <td style="vertical-align:middle">{!! strip_tags($project->body) !!}</td>
    {{--                                <td>{{ $project->user->name }}</td>--}}
{{--                                    <td style="vertical-align:middle">{{ 'tina' }}</td>--}}
                                    <td style="vertical-align:middle">
                                        <form action="{{route('projects.destroy',$project['id'])}}" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <div class="btn-group">
                                                <button type="submit"  class="btn btn-danger btn-sm "><span class="glyphicon glyphicon-trash"></span></button>
                                                <a  class="btn btn-success btn-sm" href="{{route('projects.edit',$project['id'])}}" role="button" style="display: inline-block"><span class="glyphicon glyphicon-pencil"></span></a>
                                                <a  class="btn btn-warning btn-sm" href="{{route('projects.show',$project['id'])}}" role="button" style="display: inline-block"><span class="glyphicon glyphicon-search"></span></a>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12" style="display: flex;justify-content: center;">
            {{ $projects->links() }}
        </div>
    </div>

@endsection
