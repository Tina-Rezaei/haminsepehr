<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html style="direction: rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ustora Demo</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
{{--    <link rel="stylesheet" href="css/bootstrap.min.css">--}}
{{ HTML::style('vendors/ustora/css/bootstrap.min.css') }}

<!-- Font Awesome -->
{{--    <link rel="stylesheet" href="css/font-awesome.min.css">--}}
{{ HTML::style('vendors/ustora/css/font-awesome.min.css') }}
<!-- Custom CSS -->
{{--    <link rel="stylesheet" href="css/owl.carousel.css">--}}
{{ HTML::style('vendors/ustora/css/owl.carousel.css') }}
{{--    <link rel="stylesheet" href="style.css">--}}
{{ HTML::style('vendors/ustora/style.css') }}
{{--    <link rel="stylesheet" href="css/responsive.css">--}}
{{ HTML::style('vendors/ustora/css/responsive.css') }}

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="user-menu">
                    <ul>
                        <li><a href="#"><i class="fa fa-user"></i> ورود</a></li>
                        <li><a href="checkout.html"><i class="fa fa-user"></i> خروج</a></li>
                        <li><a href="#"><i class="fa fa-user"></i> پروفایل من</a></li>
                        {{--                        <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>--}}
                        {{--                        <li><a href="cart.html"><i class="fa fa-user"></i> My Cart</a></li>--}}
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="header-right">
                    <ul class="list-unstyled list-inline">
{{--                        <li class="dropdown dropdown-small">--}}
{{--                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>--}}
{{--                            <ul class="dropdown-menu">--}}
{{--                                <li><a href="#">USD</a></li>--}}
{{--                                <li><a href="#">INR</a></li>--}}
{{--                                <li><a href="#">GBP</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}

                        <li class="dropdown dropdown-small">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">زبان :</span><span class="value">فارسی </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">German</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End header area -->

<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="logo">
                    <h1><a href="./"><div style="background-image:url({{ url('vendors/ustora/img/logo.jpg') }});width: 100px;height: 100px;background-size: contain "></div></a></h1>
                </div>
            </div>

{{--            <div class="col-sm-6">--}}
{{--                <div class="shopping-item">--}}
{{--                    <a href="cart.html">Cart - <span class="cart-amunt">$100</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</div> <!-- End site branding area -->

<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.html">صفحه اصلی</a></li>
                    <li><a href="shop.html">محصولات</a></li>
                    <li><a href="single-product.html">پروژه ها</a></li>
                    <li><a href="cart.html">درباره ما</a></li>
                    <li><a href="checkout.html">تماس با ما</a></li>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- End mainmenu area -->

<div class="slider-area" style="direction: ltr">
    <!-- Slider -->
    <div class="block-slider block-slider4">
        <ul class="" id="bxslider-home4">
            <li>
                <img src="{{ asset('vendors/ustora/img/h4-slide.png') }}" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                        iPhone <span class="primary">6 <strong>Plus</strong></span>
                    </h2>
                    <h4 class="caption subtitle">Dual SIM</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                </div>
            </li>
            <li><img src="{{ asset('vendors/ustora/img/bg2.jpg') }}" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                        by one, get one <span class="primary">50% <strong>off</strong></span>
                    </h2>
                    <h4 class="caption subtitle">school supplies & backpacks.*</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                </div>
            </li>
            <li><img src="{{ asset('vendors/ustora/img/h4-slide3.png') }}" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                        Apple <span class="primary">Store <strong>Ipod</strong></span>
                    </h2>
                    <h4 class="caption subtitle">Select Item</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                </div>
            </li>
            <li><img src="{{ asset('vendors/ustora/img/h4-slide4.png') }}" alt="Slide">
                <div class="caption-group">
                    <h2 class="caption title">
                        Apple <span class="primary">Store <strong>Ipod</strong></span>
                    </h2>
                    <h4 class="caption subtitle">& Phone</h4>
                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                </div>
            </li>
        </ul>
    </div>
    <!-- ./Slider -->
</div> <!-- End slider area -->


@yield('body')


<div class="footer-top-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer-about-us">
                    <h2>u<span>Stora</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                    <div class="footer-social">
                        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">User Navigation </h2>
                    <ul>
                        <li><a href="#">My account</a></li>
                        <li><a href="#">Order history</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Vendor contact</a></li>
                        <li><a href="#">Front page</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">Categories</h2>
                    <ul>
                        <li><a href="#">Mobile Phone</a></li>
                        <li><a href="#">Home accesseries</a></li>
                        <li><a href="#">LED TV</a></li>
                        <li><a href="#">Computer</a></li>
                        <li><a href="#">Gadets</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-newsletter">
                    <h2 class="footer-wid-title">Newsletter</h2>
                    <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                    <div class="newsletter-form">
                        <form action="#">
                            <input type="email" placeholder="Type your email">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End footer top area -->

<div class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="copyright">
                    <p>&copy; 2015 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="footer-card-icon">
                    <i class="fa fa-cc-discover"></i>
                    <i class="fa fa-cc-mastercard"></i>
                    <i class="fa fa-cc-paypal"></i>
                    <i class="fa fa-cc-visa"></i>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End footer bottom area -->

<!-- Latest jQuery form server -->
<script src="https://code.jquery.com/jquery.min.js"></script>


<!-- Bootstrap JS form CDN -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


<!-- jQuery sticky menu -->
{{--<script src="js/owl.carousel.min.js"></script>--}}
{{ HTML::script('vendors/ustora/js/owl.carousel.min.js') }}
{{--<script src="js/jquery.sticky.js"></script>--}}
{{ HTML::script('vendors/ustora/js/jquery.sticky.js') }}
<!-- jQuery easing -->
{{--<script src="js/jquery.easing.1.3.min.js"></script>--}}
{{ HTML::script('vendors/ustora/js/jquery.easing.1.3.min.js') }}

<!-- Main Script -->
{{--<script src="js/main.js"></script>--}}
{{ HTML::script('vendors/ustora/js/main.js') }}

<!-- Slider -->
{{--<script type="text/javascript" src="js/bxslider.min.js"></script>--}}
<script type="text/javascript" src="{{ URL::asset('vendors/ustora/js/bxslider.min.js') }}"></script>
{{--<script type="text/javascript" src="js/script.slider.js"></script>--}}
<script type="text/javascript" src="{{ URL::asset('vendors/ustora/js/script.slider.js') }}"></script>
</body>
</html>