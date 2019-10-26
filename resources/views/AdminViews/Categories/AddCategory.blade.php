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
            <div class="x_content" style="display: block;">
                <form id="form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate=""  enctype="multipart/form-data" method="post" action="{{route('categories.store')}}">
                    {{ csrf_field() }}
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12"  style="text-align: right">نام زیر دسته
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input id="first-name" name="category_name" class="form-control col-md-7 col-xs-12" type="text" style="margin-top:3px"  required>
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12"  style="text-align: right">دسته بندی پدر
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            {!!  $categories !!}
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="ln_solid"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 " style="display: flex;justify-content: center;" >
                            <a href="{{route('categories.index')}}" class="btn btn-primary" style="margin: 10px">انصراف</a>
                            <button type="submit" class="btn btn-success" style="margin: 10px">افزودن </button>
                        </div>
                    </div>
                    <input id="ids" type="hidden" value="" name="ids[]">

                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>

        $(document).ready(function() {
            const select = document.querySelector('*[name="categories"]');
            select.className += 'col-md-12';
            for (const option of select.options){
                const paddingLength = option.text.match(/^[\s]*/)[0].length;
                const prefix = '&nbsp;';
                const padding = `${prefix.repeat(paddingLength*2)}`;
                option.innerHTML = `${padding} ${option.text.trim()}`;
            }
            $(select).select2({ width:'100%'});
        });
    </script>
@endsection


