@extends('UserViews.master')

@section('extra_css')
    {{ HTML::style('unitegallery/css/unite-gallery.css') }}
    {{--    {{ HTML::style('unitegallery/themes/default/ug-theme-default.css') }}--}}
@append

@section('extra_js')
    {{ HTML::script('unitegallery/js/unitegallery.min.js') }}
    {{ HTML::script('unitegallery/themes/tilesgrid/ug-theme-tilesgrid.js') }}
@append

@section('js_ready_event')
    @if(false)
        <script>
            @endif
            jQuery("#gallery1").unitegallery({
                theme_navigation_type:"arrows",
                grid_num_rows:1
            });
            @if(false)
        </script>
    @endif
@append



@section('body')
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container" style="direction: rtl">
            <div class="row" style="background-color: #fefefe;;border-radius: 8px;margin-bottom: 5px;padding: 10px;border-right: solid 7px #e74c3c">
                <div class="col-sm-12">
                    {{--                <div class="col-md-8">--}}
                    {{--                    <div class="product-content-right">--}}
                    <div class="product-breadcroumb">
                        <a href="/">صفحه اصلی</a>
                        <a href="">محصولات</a>
                        <a href="">{{$product->name}}</a>
                    </div>

                </div>
            </div>
            <div class="row" style="background-color: #fefefe;  padding: 20px;  border-radius: 3px;  border-right: solid #e74c3c 7px;  margin-top: 60px;">
                <div class="col-sm-6" style="border-left: solid #f5f5f5;">
                    <div class="product-captioner">
                        <div class="caption">
                            <i class="fa fa-cog" style="font-size: 25px;vertical-align: middle;padding-left: 10px;"></i>
                            محصول
                        </div>
                    </div>
                    <div class="product-images">
                        <div class="product-main-img">
                            <div class="img-rounded" style="background-image: url({{url($product->product_gallery[0]->image)}});width: 312px;height: 378px;background-size: cover;background-repeat: no-repeat;margin: auto;background-position: 50% 50%"></div>
                        </div>

                        <div id="gallery1">
                            @foreach($product->product_gallery as $gallery)
                                <img
                                    src="{{ asset($gallery->image) }}"
                                    data-image="{{ asset($gallery->image) }}"
                                    alt="{{$product->name}}"
                                >
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="product-inner">

                        <div role="tabpanel">
                            <ul class="product-tab" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">توضیحات</a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">نظرات</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                    <h2>توضیحات محصول</h2>
                                    <p>{!! $product->description !!}</p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile">
                                    <h2>نظرات</h2>
                                    <div class="submit-review">
                                        <p><label for="name">نام</label> <input name="name" type="text"></p>
                                        <p><label for="email">ایمیل</label> <input name="email" type="email"></p>
                                        <div class="rating-chooser">
                                            <p>امتیاز شما به این محصول</p>
                                            <div class="rating-wrap-post">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <p><label for="review">متن نظر</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                        <p><input value="ارسال" type="submit"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="font-size: 18px; font-weight: bolder; display: inline-block; margin-top: 130px">قیمت:
                            <div style="color: #e74c3c; display: inline-block">
                                {!! $product->price !!}
                            </div>
                            تومان
                        </div>
                        <br><br>
                        <button class="btn btn-danger">مشاهده کاتالوگ</button>

                    </div>
                </div>

                {{--                        <div class="related-products-wrapper">--}}
                {{--                            <h2 class="related-products-title">Related Products</h2>--}}
                {{--                            <div class="related-products-carousel owl-carousel owl-theme owl-responsive-1200 owl-loaded">--}}
                {{--                                --}}
                {{--                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-770.001px, 0px, 0px); transition: all 0s ease 0s; width: 3080px;"><div class="owl-item cloned" style="width: 236.667px; margin-right: 20px;"><div class="single-product">--}}
                {{--                                                <div class="product-f-image">--}}
                {{--                                                    <img src="img/product-4.jpg" alt="">--}}
                {{--                                                    <div class="product-hover">--}}
                {{--                                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>--}}
                {{--                                                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>--}}
                {{--                                                    </div>--}}
                {{--                                                </div>--}}

                {{--                                                <h2><a href="">Sony playstation microsoft</a></h2>--}}

                {{--                                                <div class="product-carousel-price">--}}
                {{--                                                    <ins>$200.00</ins> <del>$225.00</del>--}}
                {{--                                                </div>--}}
                {{--                                            </div></div><div class="owl-item cloned" style="width: 236.667px; margin-right: 20px;"><div class="single-product">--}}
                {{--                                                <div class="product-f-image">--}}
                {{--                                                    <img src="img/product-5.jpg" alt="">--}}
                {{--                                                    <div class="product-hover">--}}
                {{--                                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>--}}
                {{--                                                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>--}}
                {{--                                                    </div>--}}
                {{--                                                </div>--}}

                {{--                                                <h2><a href="">Sony Smart Air Condtion</a></h2>--}}

                {{--                                                <div class="product-carousel-price">--}}
                {{--                                                    <ins>$1200.00</ins> <del>$1355.00</del>--}}
                {{--                                                </div>--}}
                {{--                                            </div></div><div class="owl-item cloned" style="width: 236.667px; margin-right: 20px;"><div class="single-product">--}}
                {{--                                                <div class="product-f-image">--}}
                {{--                                                    <img src="img/product-6.jpg" alt="">--}}
                {{--                                                    <div class="product-hover">--}}
                {{--                                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>--}}
                {{--                                                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>--}}
                {{--                                                    </div>--}}
                {{--                                                </div>--}}

                {{--                                                <h2><a href="">Samsung gallaxy note 4</a></h2>--}}

                {{--                                                <div class="product-carousel-price">--}}
                {{--                                                    <ins>$400.00</ins>--}}
                {{--                                                </div>--}}
                {{--                                            </div></div><div class="owl-item active" style="width: 236.667px; margin-right: 20px;"><div class="single-product">--}}
                {{--                                                <div class="product-f-image">--}}
                {{--                                                    <img src="img/product-1.jpg" alt="">--}}
                {{--                                                    <div class="product-hover">--}}
                {{--                                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>--}}
                {{--                                                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>--}}
                {{--                                                    </div>--}}
                {{--                                                </div>--}}

                {{--                                                <h2><a href="">Sony Smart TV - 2015</a></h2>--}}

                {{--                                                <div class="product-carousel-price">--}}
                {{--                                                    <ins>$700.00</ins> <del>$100.00</del>--}}
                {{--                                                </div>--}}
                {{--                                            </div></div><div class="owl-item active" style="width: 236.667px; margin-right: 20px;"><div class="single-product">--}}
                {{--                                                <div class="product-f-image">--}}
                {{--                                                    <img src="img/product-2.jpg" alt="">--}}
                {{--                                                    <div class="product-hover">--}}
                {{--                                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>--}}
                {{--                                                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>--}}
                {{--                                                    </div>--}}
                {{--                                                </div>--}}

                {{--                                                <h2><a href="">Apple new mac book 2015 March :P</a></h2>--}}
                {{--                                                <div class="product-carousel-price">--}}
                {{--                                                    <ins>$899.00</ins> <del>$999.00</del>--}}
                {{--                                                </div>--}}
                {{--                                            </div></div><div class="owl-item active" style="width: 236.667px; margin-right: 20px;"><div class="single-product">--}}
                {{--                                                <div class="product-f-image">--}}
                {{--                                                    <img src="img/product-3.jpg" alt="">--}}
                {{--                                                    <div class="product-hover">--}}
                {{--                                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>--}}
                {{--                                                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>--}}
                {{--                                                    </div>--}}
                {{--                                                </div>--}}

                {{--                                                <h2><a href="">Apple new i phone 6</a></h2>--}}

                {{--                                                <div class="product-carousel-price">--}}
                {{--                                                    <ins>$400.00</ins> <del>$425.00</del>--}}
                {{--                                                </div>--}}
                {{--                                            </div></div><div class="owl-item" style="width: 236.667px; margin-right: 20px;"><div class="single-product">--}}
                {{--                                                <div class="product-f-image">--}}
                {{--                                                    <img src="img/product-4.jpg" alt="">--}}
                {{--                                                    <div class="product-hover">--}}
                {{--                                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>--}}
                {{--                                                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>--}}
                {{--                                                    </div>--}}
                {{--                                                </div>--}}

                {{--                                                <h2><a href="">Sony playstation microsoft</a></h2>--}}

                {{--                                                <div class="product-carousel-price">--}}
                {{--                                                    <ins>$200.00</ins> <del>$225.00</del>--}}
                {{--                                                </div>--}}
                {{--                                            </div></div><div class="owl-item" style="width: 236.667px; margin-right: 20px;"><div class="single-product">--}}
                {{--                                                <div class="product-f-image">--}}
                {{--                                                    <img src="img/product-5.jpg" alt="">--}}
                {{--                                                    <div class="product-hover">--}}
                {{--                                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>--}}
                {{--                                                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>--}}
                {{--                                                    </div>--}}
                {{--                                                </div>--}}

                {{--                                                <h2><a href="">Sony Smart Air Condtion</a></h2>--}}

                {{--                                                <div class="product-carousel-price">--}}
                {{--                                                    <ins>$1200.00</ins> <del>$1355.00</del>--}}
                {{--                                                </div>--}}
                {{--                                            </div></div><div class="owl-item" style="width: 236.667px; margin-right: 20px;"><div class="single-product">--}}
                {{--                                                <div class="product-f-image">--}}
                {{--                                                    <img src="img/product-6.jpg" alt="">--}}
                {{--                                                    <div class="product-hover">--}}
                {{--                                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>--}}
                {{--                                                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>--}}
                {{--                                                    </div>--}}
                {{--                                                </div>--}}

                {{--                                                <h2><a href="">Samsung gallaxy note 4</a></h2>--}}

                {{--                                                <div class="product-carousel-price">--}}
                {{--                                                    <ins>$400.00</ins>--}}
                {{--                                                </div>--}}
                {{--                                            </div></div><div class="owl-item cloned" style="width: 236.667px; margin-right: 20px;"><div class="single-product">--}}
                {{--                                                <div class="product-f-image">--}}
                {{--                                                    <img src="img/product-1.jpg" alt="">--}}
                {{--                                                    <div class="product-hover">--}}
                {{--                                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>--}}
                {{--                                                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>--}}
                {{--                                                    </div>--}}
                {{--                                                </div>--}}

                {{--                                                <h2><a href="">Sony Smart TV - 2015</a></h2>--}}

                {{--                                                <div class="product-carousel-price">--}}
                {{--                                                    <ins>$700.00</ins> <del>$100.00</del>--}}
                {{--                                                </div>--}}
                {{--                                            </div></div><div class="owl-item cloned" style="width: 236.667px; margin-right: 20px;"><div class="single-product">--}}
                {{--                                                <div class="product-f-image">--}}
                {{--                                                    <img src="img/product-2.jpg" alt="">--}}
                {{--                                                    <div class="product-hover">--}}
                {{--                                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>--}}
                {{--                                                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>--}}
                {{--                                                    </div>--}}
                {{--                                                </div>--}}

                {{--                                                <h2><a href="">Apple new mac book 2015 March :P</a></h2>--}}
                {{--                                                <div class="product-carousel-price">--}}
                {{--                                                    <ins>$899.00</ins> <del>$999.00</del>--}}
                {{--                                                </div>--}}
                {{--                                            </div></div><div class="owl-item cloned" style="width: 236.667px; margin-right: 20px;"><div class="single-product">--}}
                {{--                                                <div class="product-f-image">--}}
                {{--                                                    <img src="img/product-3.jpg" alt="">--}}
                {{--                                                    <div class="product-hover">--}}
                {{--                                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>--}}
                {{--                                                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>--}}
                {{--                                                    </div>--}}
                {{--                                                </div>--}}

                {{--                                                <h2><a href="">Apple new i phone 6</a></h2>--}}

                {{--                                                <div class="product-carousel-price">--}}
                {{--                                                    <ins>$400.00</ins> <del>$425.00</del>--}}
                {{--                                                </div>--}}
                {{--                                            </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="">prev</div><div class="owl-next" style="">next</div></div><div style="" class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div></div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                <div class="col-sm-12 comments">
                    <div class="comments-caption">
                        <h3>نظرات:</h3>
                    </div>
                        <div class="col-md-12 comment">
                            <div class="col-md-1">
                                <i class="fa fa-3x fa-comment comment-icon"></i>
                            </div>
                            <div class="col-md-11 col-sm-12">
                                <div class="name">رضاییان</div>
                                <div class="text">محصول بسیار کاربردی ای هست</div>
                            </div>
                        </div>

                        <div class="col-md-12 comment">
                            <div class="col-md-1">
                                <i class="fa fa-3x fa-comment comment-icon"></i>
                            </div>
                            <div class="col-md-11 col-sm-12">
                                <div class="name">جهرمی</div>
                                <div class="text">یکی از بهترین های بازار</div>
                            </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
@endsection
