@extends('AdminViews.master')
@section('header')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea', directionality :"rtl"});</script>
@endsection
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="col-md-12 col-sm-12 col-xs-12" >
        <div class="x_panel" >
            <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate=""  enctype="multipart/form-data" method="post" action="{{route('projects.store')}}">
                {{ csrf_field() }}
                <div class="x_title">
                    <h2>عنوان پروژه:</h2>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group ">
                            <input class="form-control has-feedback-left" id="inputSuccess2"  type="text" name="title">
                        </div>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: block;">
                    <br>
                    <h4>محتوای پروژه:
                    </h4>
                    <textarea id="full-featured" name="body" style="height: 100vh"> </textarea>
                    <div class="ln_solid"></div>

                    <div class="x_title" style="overflow: auto">
                        <h4>بارگزاری عکس :</h4>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div id="boxes">
                                <div class="col-md-3 col-sm-4 col-xs-11 wow pulse" >
                                    <div  id="blah" style=" width: 100%;background-image: url('{{asset('images/products/default.gif')}}')" class="d-block mygallery" alt="...">
                                    </div>
                                    <span class="btn btn-primary btn-file" style="width: 100%;margin-right: 0 ">
                                انتخاب عکس <input type="file" name="thumbnailimg" id="thumbnailimg" accept="image/*" onchange="readURL(this);" >
                                     </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 " style="display: flex;justify-content: center;" >
                            <a href="{{route('projects.index')}}" class="btn btn-primary" style="margin: 10px">انصراف</a>
                            <button type="submit" class="btn btn-success" style="margin: 10px">افزودن پروژه</button>
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
                reader.onload = (e) =>{
                    $(input.parentElement.previousElementSibling)
                    // $('#blah')
                        .css('background-image', `url('${e.target.result}')`);
                };
                const id = input.parentElement.parentElement.getAttribute('id');
                if(id)
                    ids.push(id);
                $(input.parentElement.parentElement).attr('id','');
                reader.readAsDataURL(input.files[0]);
            }
        }
        function myFunction() {
            alert ('kk');
        }
    </script>
@endsection


