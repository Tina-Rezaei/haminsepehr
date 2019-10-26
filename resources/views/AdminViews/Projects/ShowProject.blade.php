@extends('AdminViews.master')
@section('content')
    @foreach($projects as $project)
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" id="{{$project['id']}}">
                    <div class="x_title" style="background-image:url({{ $project['coverimg'] }});height: 200px">
                        <h2>{{$project['title']}}</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">تنظیمات 1</a>
                                    </li>
                                    <li><a href="#">تنظیمات 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        {!! ($project['body'] ) !!}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="row"  >
        <div style="margin: auto;width: 130px">
            {{ $projects->links() }}
        </div>
    </div>

@endsection

{{--@section('script')--}}
{{--    <script>--}}
{{--        var id = {!! $id !!}--}}
{{--        $(document).ready(function(){--}}
{{--            $('html, body').animate({--}}
{{--                scrollTop: $("#"+id).offset().top--}}
{{--            }, 1000);--}}
{{--        });--}}
{{--    </script>--}}
{{--@endsection--}}