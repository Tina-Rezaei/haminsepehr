@extends('UserViews.master')
@section('body')

    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->

    <style>
        .box{
            display: inline-block;
            width: 300px;
            height: 300px;
            background-color: #0b97c4;
            margin: 3px;
            border: solid 1px white;
        }
    </style>
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product"  style="direction: ltr">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel">
                            @foreach($products as $product)
                                <div class="single-product" style="width: 240px;height: 260px;">
                                    <div class="product-f-image" style="background-image:url({{ url($product->product_gallery[0]->image) }});background-size:cover;background-position: 50% 50%; width: 220px;height: 260px">
{{--                                        <img src="{{ asset($product->product_gallery[0]->image) }}" alt="">--}}
{{--                                        <img src="{{ asset('vendors/ustora/img/product-6.jpg') }}" alt="">--}}
                                        <div class="product-hover">
{{--                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>--}}
                                            <a href="{{ route('singleproduct',$product->id) }}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$400.00</ins>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->

    <div class="brands-area"  style="direction: ltr">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
{{--                            <img src="{{ asset('vendors/ustora/img/brand1.png') }}" alt="">--}}
{{--                            <img src="{{ asset('vendors/ustora/img/siemens-1.jpg') }}" alt="">--}}
                            <div style="background-image: url({{ url('vendors/ustora/img/Hochiki-Global-Banner-Logo.jpg') }});width: 200px;height: 90px;background-size:contain;background-repeat: no-repeat;margin-top: 30px"></div>
                            <div style="background-image: url({{ url('vendors/ustora/img/inim.jpg') }});width: 200px;height: 90px;background-size:contain;background-repeat: no-repeat;margin-top: 30px"></div>
                            <div style="background-image: url({{ url('vendors/ustora/img/gent.jpg') }});width: 200px;height: 90px;background-size:contain;background-repeat: no-repeat;margin-top: 30px"></div>
                            <div style="background-image: url({{ url('vendors/ustora/img/siemens-logo-default.svg') }});width: 200px;height: 90px;background-size:contain;background-repeat: no-repeat;margin-top: 30px"></div>
{{--                            <img src="{{ asset('vendors/ustora/img/brand3.png') }}" alt="">--}}
{{--                            <img src="{{ asset('vendors/ustora/img/brand4.png') }}" alt="">--}}
{{--                            <img src="{{ asset('vendors/ustora/img/brand5.png') }}" alt="">--}}
{{--                            <img src="{{ asset('vendors/ustora/img/brand6.png') }}" alt="">--}}
{{--                            <img src="{{ asset('vendors/ustora/img/brand1.png') }}" alt="">--}}
{{--                            <img src="{{ asset('vendors/ustora/img/siemens-1.jpg') }}" alt="">--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->




@endsection