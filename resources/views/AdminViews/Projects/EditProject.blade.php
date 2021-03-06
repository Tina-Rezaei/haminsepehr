@extends('AdminViews.master')
@section('header')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea', directionality :"rtl"});</script>
@endsection
@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" enctype="multipart/form-data" method="POST" action="{{route('projects.update',$project->id)}}">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="x_title">
                    <h2>عنوان پروژه:
                    </h2>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input class="form-control has-feedback-left" id="inputSuccess2"  type="text" name="title" value="{{$project->title}}">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: block;">
                    <br>
                    <h4>محتوای پروژه:
                    </h4>

                    <textarea id="full-featured" name="body" style="height: 100vh"> {{$project->body}}</textarea>
                    <div class="ln_solid"></div>

                    <div class="x_title" style="overflow: auto">
                        <h4>بارگزاری عکس :</h4>
{{--                        <input type="file" name="coverimg" id="coverimg" accept="image/*" style="margin: 10px">--}}
{{--                        <input type="file" name="thumbnailimg" id="thumbnailimg" accept="image/*" style="margin: 10px">--}}
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div id="boxes">
                                <div class="col-md-3 col-sm-4 col-xs-11 wow pulse" id="{{$project->id}}">
                                    <div  id="blah" style=" width: 100%;background-image: url('{{asset($project->thumbnailimg)}}')" class="d-block mygallery" alt="...">
                                    </div>
                                    <span class="btn btn-primary btn-file" style="width: 100%;margin-right: 0 ">
                                انتخاب عکس <input type="file" name="thumbnailimg" id="thumbnailimg" accept="image/*" onchange="readURL(this);" >
                                     </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3" style="display: flex;justify-content: center;">
                            <a href="{{route('projects.index')}}" class="btn btn-primary">انصراف</a>
                            <button type="submit" class="btn btn-success">ویرایش</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('script')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .css('background-image', `url('${e.target.result}')`);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection


