@extends('UserViews.master')
@section('body')
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container" style="direction: rtl">
            <div class="row" style="">

                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="">Home</a>
                            <a href="">Category Name</a>
                            <a href="">Sony Smart TV - 2015</a>
                        </div>

                        <div class="row" style=" ">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="{{ asset('vendors/ustora/img/product-2.jpg') }}" alt="">
                                    </div>

                                    <div class="product-gallery">
                                        <img src="img/product-thumb-1.jpg" alt="">
                                        <img src="img/product-thumb-2.jpg" alt="">
                                        <img src="img/product-thumb-3.jpg" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="product-inner">

                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Product Description</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla. Quisque volutpat nulla risus, id maximus ex aliquet ut. Suspendisse potenti. Nulla varius lectus id turpis dignissim porta. Quisque magna arcu, blandit quis felis vehicula, feugiat gravida diam. Nullam nec turpis ligula. Aliquam quis blandit elit, ac sodales nisl. Aliquam eget dolor eget elit malesuada aliquet. In varius lorem lorem, semper bibendum lectus lobortis ac.</p>

                                                <p>Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex. Nulla facilisi. Etiam scelerisque tincidunt quam facilisis lobortis. In malesuada pulvinar neque a consectetur. Nunc aliquam gravida purus, non malesuada sem accumsan in. Morbi vel sodales libero.</p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Your rating</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input value="Submit" type="submit"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Related Products</h2>
                            <div class="related-products-carousel owl-carousel owl-theme owl-responsive-1200 owl-loaded">






                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-770.001px, 0px, 0px); transition: all 0s ease 0s; width: 3080px;"><div class="owl-item cloned" style="width: 236.667px; margin-right: 20px;"><div class="single-product">
                                                <div class="product-f-image">
                                                    <img src="img/product-4.jpg" alt="">
                                                    <div class="product-hover">
                                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                    </div>
                                                </div>

                                                <h2><a href="">Sony playstation microsoft</a></h2>

                                                <div class="product-carousel-price">
                                                    <ins>$200.00</ins> <del>$225.00</del>
                                                </div>
                                            </div></div><div class="owl-item cloned" style="width: 236.667px; margin-right: 20px;"><div class="single-product">
                                                <div class="product-f-image">
                                                    <img src="img/product-5.jpg" alt="">
                                                    <div class="product-hover">
                                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                    </div>
                                                </div>

                                                <h2><a href="">Sony Smart Air Condtion</a></h2>

                                                <div class="product-carousel-price">
                                                    <ins>$1200.00</ins> <del>$1355.00</del>
                                                </div>
                                            </div></div><div class="owl-item cloned" style="width: 236.667px; margin-right: 20px;"><div class="single-product">
                                                <div class="product-f-image">
                                                    <img src="img/product-6.jpg" alt="">
                                                    <div class="product-hover">
                                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                    </div>
                                                </div>

                                                <h2><a href="">Samsung gallaxy note 4</a></h2>

                                                <div class="product-carousel-price">
                                                    <ins>$400.00</ins>
                                                </div>
                                            </div></div><div class="owl-item active" style="width: 236.667px; margin-right: 20px;"><div class="single-product">
                                                <div class="product-f-image">
                                                    <img src="img/product-1.jpg" alt="">
                                                    <div class="product-hover">
                                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                    </div>
                                                </div>

                                                <h2><a href="">Sony Smart TV - 2015</a></h2>

                                                <div class="product-carousel-price">
                                                    <ins>$700.00</ins> <del>$100.00</del>
                                                </div>
                                            </div></div><div class="owl-item active" style="width: 236.667px; margin-right: 20px;"><div class="single-product">
                                                <div class="product-f-image">
                                                    <img src="img/product-2.jpg" alt="">
                                                    <div class="product-hover">
                                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                    </div>
                                                </div>

                                                <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                                                <div class="product-carousel-price">
                                                    <ins>$899.00</ins> <del>$999.00</del>
                                                </div>
                                            </div></div><div class="owl-item active" style="width: 236.667px; margin-right: 20px;"><div class="single-product">
                                                <div class="product-f-image">
                                                    <img src="img/product-3.jpg" alt="">
                                                    <div class="product-hover">
                                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                    </div>
                                                </div>

                                                <h2><a href="">Apple new i phone 6</a></h2>

                                                <div class="product-carousel-price">
                                                    <ins>$400.00</ins> <del>$425.00</del>
                                                </div>
                                            </div></div><div class="owl-item" style="width: 236.667px; margin-right: 20px;"><div class="single-product">
                                                <div class="product-f-image">
                                                    <img src="img/product-4.jpg" alt="">
                                                    <div class="product-hover">
                                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                    </div>
                                                </div>

                                                <h2><a href="">Sony playstation microsoft</a></h2>

                                                <div class="product-carousel-price">
                                                    <ins>$200.00</ins> <del>$225.00</del>
                                                </div>
                                            </div></div><div class="owl-item" style="width: 236.667px; margin-right: 20px;"><div class="single-product">
                                                <div class="product-f-image">
                                                    <img src="img/product-5.jpg" alt="">
                                                    <div class="product-hover">
                                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                    </div>
                                                </div>

                                                <h2><a href="">Sony Smart Air Condtion</a></h2>

                                                <div class="product-carousel-price">
                                                    <ins>$1200.00</ins> <del>$1355.00</del>
                                                </div>
                                            </div></div><div class="owl-item" style="width: 236.667px; margin-right: 20px;"><div class="single-product">
                                                <div class="product-f-image">
                                                    <img src="img/product-6.jpg" alt="">
                                                    <div class="product-hover">
                                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                    </div>
                                                </div>

                                                <h2><a href="">Samsung gallaxy note 4</a></h2>

                                                <div class="product-carousel-price">
                                                    <ins>$400.00</ins>
                                                </div>
                                            </div></div><div class="owl-item cloned" style="width: 236.667px; margin-right: 20px;"><div class="single-product">
                                                <div class="product-f-image">
                                                    <img src="img/product-1.jpg" alt="">
                                                    <div class="product-hover">
                                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                    </div>
                                                </div>

                                                <h2><a href="">Sony Smart TV - 2015</a></h2>

                                                <div class="product-carousel-price">
                                                    <ins>$700.00</ins> <del>$100.00</del>
                                                </div>
                                            </div></div><div class="owl-item cloned" style="width: 236.667px; margin-right: 20px;"><div class="single-product">
                                                <div class="product-f-image">
                                                    <img src="img/product-2.jpg" alt="">
                                                    <div class="product-hover">
                                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                    </div>
                                                </div>

                                                <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                                                <div class="product-carousel-price">
                                                    <ins>$899.00</ins> <del>$999.00</del>
                                                </div>
                                            </div></div><div class="owl-item cloned" style="width: 236.667px; margin-right: 20px;"><div class="single-product">
                                                <div class="product-f-image">
                                                    <img src="img/product-3.jpg" alt="">
                                                    <div class="product-hover">
                                                        <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                        <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                    </div>
                                                </div>

                                                <h2><a href="">Apple new i phone 6</a></h2>

                                                <div class="product-carousel-price">
                                                    <ins>$400.00</ins> <del>$425.00</del>
                                                </div>
                                            </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="">prev</div><div class="owl-next" style="">next</div></div><div style="" class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection