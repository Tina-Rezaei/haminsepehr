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
                <form id="form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate=""  enctype="multipart/form-data" method="post" action="{{route('products.update',$product->id)}}">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12" style="text-align: right;">کد محصول
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input id="first-name" name="products_code" class="form-control col-md-7 col-xs-12" type="text" style="margin-top:3px" value="{{$product->products_code}}" required/>
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12"  style="text-align: right">نام محصول
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input id="first-name" name="product_name" value="{{$product->name}}" class="form-control col-md-7 col-xs-12" type="text" style="margin-top:3px"  required>
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12"  style="text-align: right">دسته بندی
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            {!!  $categories !!}
                        </div>
                    </div>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12"  style="text-align: right"> توضیحات
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <textarea id="full-featured" name="description" style="height: 50vh;margin-top:3px" >{{$product->description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12" style="text-align: right"> قیمت (ریال)
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input type="number" name="price" value="{{$product->price}}"  min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control" id="c1" style="margin-top:3px" />
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12"  style="text-align: right"> موجودی
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <input id="first-name" name="counts_in_stock" value="{{$product->counts_in_stock}}" min="0"  class="form-control" type="number" style="margin-top:3px">
                        </div>
                    </div>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12"  style="text-align: right">گالری تصاویر
                            <span class="required">*</span>
                        </label>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div id="boxes">
                            @foreach($products_gallery as $product_gallrey)
                                <div class="col-md-3 col-sm-4 col-xs-11 wow pulse" id="{{$product_gallrey->id}}">
                                    <div  style=" width: 100%;background-image: url('{{asset($product_gallrey->image)}}')" class="d-block mygallery" alt="...">
                                        <button type="button" class="btn btn-link mybutton" style="transform: translate(9px,0px);" onclick="remove(this)">
                                            <span class="glyphicon glyphicon-remove"></span>
                                        </button>
                                    </div>
                                    <span class="btn btn-primary btn-file" style="width: 100%;margin-right: 0 ">
                                    انتخاب عکس <input type="file" name="images[]" onchange="readURL(this);" >
                                    </span>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-1 col-sm-1 col-xs-1">
                            <button id="addbutton" type="button" class="btn btn-info btn-circle"><i class="glyphicon glyphicon-plus"></i></button>
                        </div>
                    </div>

                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label col-md-12 col-sm-12 col-xs-12"  style="text-align: right">بارگذاری کاتالوگ
                            <span class="required">*</span>
                        </label>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div id="boxes-catalog">
                            @foreach($catalogs as $catalog)
                            <div class="col-md-2 col-sm-3 col-xs-6 wow pulse" id="{{$catalog->id}}" style="will-change: contents" >
                                <div  style=" width: 100%;" class="d-block" alt="...">
                                    <button type="button" class="btn btn-link" style="transform: translate(9px,0px);" onclick="removecatalog(this)">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </button>
                                    <div class="catalog-name">{{ $catalog->name }}</div>
                                </div>
                                <span class="btn btn-primary btn-file" style="width: 100%;margin-right: 0 ">
                                بارگذاری فایل <input type="file" name="catalogs[]" onchange="setCatalogName(this);" >
                                </span>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-md-1 col-sm-1 col-xs-1">
                            <button id="addbutton-catalog" type="button" class="btn btn-info btn-circle"><i class="glyphicon glyphicon-plus"></i></button>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="ln_solid"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 " style="display: flex;justify-content: center;" >
                            <a href="{{route('products.index')}}" class="btn btn-primary" style="margin: 10px">انصراف</a>
                            <button type="submit" class="btn btn-success" style="margin: 10px">ویرایش </button>
                        </div>
                    </div>
                    <input id="ids" type="hidden" value="" name="ids[]">
                    <input id="catalog_ids" type="hidden" value="" name="catalog_ids[]">

                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        var ids = [];
        var catalog_ids = [];
        function remove(button) {
            let x= button.parentElement.parentElement;
            const childCount = x.parentElement.childElementCount;
            if( childCount >1 && childCount < 20) {
                x.parentElement.removeChild(x);
            }
            const id = x.getAttribute('id');
            if(id)
                ids.push(id);
        }
        function removecatalog(button) {
            let x= button.parentElement.parentElement;
            const childCount = x.parentElement.childElementCount;
            if( childCount >1 && childCount < 20) {
                x.parentElement.removeChild(x);
            }
            const id = x.getAttribute('id');
            if(id)
                catalog_ids.push(id);
        }

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

        function setCatalogName(input) {
            if (input.files && input.files[0]) {
                $(input.parentElement.parentElement).find('.catalog-name').text(input.files[0].name);
            }
            const id = input.parentElement.parentElement.getAttribute('id');
            if(id)
                ids.push(id);
            $(input.parentElement.parentElement).attr('id','');
        }

        let addbutton = document.getElementById("addbutton");
        addbutton.addEventListener("click", function() {
            let boxes = document.getElementById("boxes");
            let clone = boxes.firstElementChild.cloneNode(true);
            $(clone).find('.mygallery').css('background-image', 'url({{asset('images/products/default.gif')}})');
            $(clone).attr('id', '');
            boxes.appendChild(clone);
        });

        let addbuttonCatalog = document.getElementById("addbutton-catalog");
        addbuttonCatalog.addEventListener("click", function() {
            let boxes = document.getElementById("boxes-catalog");
            let clone = boxes.firstElementChild.cloneNode(true);
            {{--$(clone).find('.mygallery').css('background-image', 'url({{asset('images/products/default.gif')}})');--}}
            boxes.appendChild(clone);
        });

        $('#form2').submit(function () {
            $('#ids').val(ids);
            $('#catalog_ids').val(catalog_ids);
        });
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


