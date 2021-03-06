<!DOCTYPE html>
<html style="direction: rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>شرکت حامین سپهر</title>

    <!-- Google Fonts -->
    {{--    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>--}}
    {{--    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>--}}
    {{--    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>--}}


    <style>
        #loader{
            width: 100%;
            height: 100%;
            position: fixed;
            left:0;
            z-index: 999999999999;
            right: 0;
            top:0;
            bottom: 0;
            text-align: center;
            background: #fefefe;
            color: #f6f6f6;
            transition: all .7s ease-in;
            opacity: 1;
        }
        #loader .loader-container{
            position: relative;
            top: 50%;
        }

        .sk-folding-cube {
            margin: 20px auto;
            width: 40px;
            height: 40px;
            position: relative;
            -webkit-transform: rotateZ(45deg);
            transform: rotateZ(45deg);
        }

        .sk-folding-cube .sk-cube {
            float: left;
            width: 50%;
            height: 50%;
            position: relative;
            -webkit-transform: scale(1.1);
            -ms-transform: scale(1.1);
            transform: scale(1.1);
        }
        .sk-folding-cube .sk-cube:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #e74c3c;
            -webkit-animation: sk-foldCubeAngle 2.4s infinite linear both;
            animation: sk-foldCubeAngle 2.4s infinite linear both;
            -webkit-transform-origin: 100% 100%;
            -ms-transform-origin: 100% 100%;
            transform-origin: 100% 100%;
        }
        .sk-folding-cube .sk-cube2 {
            -webkit-transform: scale(1.1) rotateZ(90deg);
            transform: scale(1.1) rotateZ(90deg);
        }
        .sk-folding-cube .sk-cube3 {
            -webkit-transform: scale(1.1) rotateZ(180deg);
            transform: scale(1.1) rotateZ(180deg);
        }
        .sk-folding-cube .sk-cube4 {
            -webkit-transform: scale(1.1) rotateZ(270deg);
            transform: scale(1.1) rotateZ(270deg);
        }
        .sk-folding-cube .sk-cube2:before {
            -webkit-animation-delay: 0.3s;
            animation-delay: 0.3s;
        }
        .sk-folding-cube .sk-cube3:before {
            -webkit-animation-delay: 0.6s;
            animation-delay: 0.6s;
        }
        .sk-folding-cube .sk-cube4:before {
            -webkit-animation-delay: 0.9s;
            animation-delay: 0.9s;
        }
        @-webkit-keyframes sk-foldCubeAngle {
            0%, 10% {
                -webkit-transform: perspective(140px) rotateX(-180deg);
                transform: perspective(140px) rotateX(-180deg);
                opacity: 0;
            } 25%, 75% {
                  -webkit-transform: perspective(140px) rotateX(0deg);
                  transform: perspective(140px) rotateX(0deg);
                  opacity: 1;
              } 90%, 100% {
                    -webkit-transform: perspective(140px) rotateY(180deg);
                    transform: perspective(140px) rotateY(180deg);
                    opacity: 0;
                }
        }

        @keyframes sk-foldCubeAngle {
            0%, 10% {
                -webkit-transform: perspective(140px) rotateX(-180deg);
                transform: perspective(140px) rotateX(-180deg);
                opacity: 0;
            } 25%, 75% {
                  -webkit-transform: perspective(140px) rotateX(0deg);
                  transform: perspective(140px) rotateX(0deg);
                  opacity: 1;
              } 90%, 100% {
                    -webkit-transform: perspective(140px) rotateY(180deg);
                    transform: perspective(140px) rotateY(180deg);
                    opacity: 0;
                }
        }
    </style>
</head>
<body style="background-color: #f5f5f5">




<div id="loader">
    <div class="loader-container">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
</div>

<link href='https://cdn.fontcdn.ir/Font/Persian/Vazir/Vazir.css' rel='stylesheet' type='text/css'>

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

@yield('extra_css')

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->



{{--<div class="header-area">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="user-menu">--}}
{{--                    <ul>--}}
{{--                        <li><a href="#"><i class="fa fa-user"></i> ورود</a></li>--}}
{{--                        <li><a href="checkout.html"><i class="fa fa-user"></i> خروج</a></li>--}}
{{--                        <li><a href="#"><i class="fa fa-user"></i> پروفایل من</a></li>--}}
{{--                        --}}{{--                        <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>--}}
{{--                        --}}{{--                        <li><a href="cart.html"><i class="fa fa-user"></i> My Cart</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-md-4">--}}
{{--                <div class="header-right">--}}
{{--                    <ul class="list-unstyled list-inline">--}}
{{--                        <li class="dropdown dropdown-small">--}}
{{--                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>--}}
{{--                            <ul class="dropdown-menu">--}}
{{--                                <li><a href="#">USD</a></li>--}}
{{--                                <li><a href="#">INR</a></li>--}}
{{--                                <li><a href="#">GBP</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}

{{--                        <li class="dropdown dropdown-small">--}}
{{--                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">زبان :</span><span class="value">فارسی </span><b class="caret"></b></a>--}}
{{--                            <ul class="dropdown-menu">--}}
{{--                                <li><a href="#">English</a></li>--}}
{{--                                <li><a href="#">French</a></li>--}}
{{--                                <li><a href="#">German</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div> <!-- End header area -->--}}

{{--<div class="site-branding-area">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-sm-12">--}}
{{--                <div class="logo">--}}
{{--                    <h1><a href="./"></a></h1>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-sm-6">--}}
{{--                <div class="shopping-item">--}}
{{--                    <a href="cart.html">Cart - <span class="cart-amunt">$100</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div> <!-- End site branding area -->--}}

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
                <ul class="nav navbar-nav" style="width: 100%; padding-top: 18px">
                    <a href="#" class="logo" style="display: inline-block; margin-top: -18px; float: right">
                        <div style="background-image:url({{ url('vendors/ustora/img/logo.jpg') }});width: 60px;height: 60px;background-size: contain; display: inline-block; transform: translateX(30px)"></div>
                    </a>

                    <li class="active"><a href="{{ route('/') }}">صفحه اصلی</a></li>
                    <li><a href="shop.html">محصولات</a></li>
                    <li><a href="single-product.html">پروژه ها</a></li>
                    <li><a href="#">ناحیه کاربری</a></li>
                    <li><a href="cart.html">درباره ما</a></li>
                    <li><a href="checkout.html">تماس با ما</a></li>

                    <li id="langselect" class="dropdown dropdown-small">
                        <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">زبان :</span><span class="value">فارسی </span><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">English</a></li>
                        </ul>
                    </li>
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
{{--                <div class="caption-group">--}}
{{--                    <h2 class="caption title">--}}
{{--                        iPhone <span class="primary">6 <strong>Plus</strong></span>--}}
{{--                    </h2>--}}
{{--                    <h4 class="caption subtitle">Dual SIM</h4>--}}
{{--                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>--}}
{{--                </div>--}}
            </li>
            <li><img src="{{ asset('vendors/ustora/img/bg2.jpg') }}" alt="Slide">
{{--                <div class="caption-group">--}}
{{--                    <h2 class="caption title">--}}
{{--                        by one, get one <span class="primary">50% <strong>off</strong></span>--}}
{{--                    </h2>--}}
{{--                    <h4 class="caption subtitle">school supplies & backpacks.*</h4>--}}
{{--                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>--}}
{{--                </div>--}}
            </li>
            <li><img src="{{ asset('vendors/ustora/img/slide3.jpg') }}" alt="Slide">
{{--                <div class="caption-group">--}}
{{--                    <h2 class="caption title">--}}
{{--                        Apple <span class="primary">Store <strong>Ipod</strong></span>--}}
{{--                    </h2>--}}
{{--                    <h4 class="caption subtitle">Select Item</h4>--}}
{{--                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>--}}
{{--                </div>--}}
            </li>
            <li><img src="{{ asset('vendors/ustora/img/slide2.jpg') }}" alt="Slide">
{{--                <div class="caption-group">--}}
{{--                    <h2 class="caption title">--}}
{{--                        Apple <span class="primary">Store <strong>Ipod</strong></span>--}}
{{--                    </h2>--}}
{{--                    <h4 class="caption subtitle">& Phone</h4>--}}
{{--                    <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>--}}
{{--                </div>--}}
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
                    <h2> شرکت حامین <span> سپهر</span></h2>
                    <p style="text-align: justify">
                        ويژگی های شرکت ويژگی های شرکت ويژگی های شرکت ويژگی های شرکت ويژگی های شرکت ويژگی های شرکت ويژگی های شرکت ويژگی های شرکت ويژگی های شرکت ويژگی های شرکت ويژگی های شرکت ويژگی های شرکت ويژگی های شرکت ويژگی های شرکت ويژگی های شرکت ويژگی های شرکت ويژگی های شرکت ويژگی های شرکت ويژگی های شرکت ويژگی های شرکت
                    </p>
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
                    <h2 class="footer-wid-title">منو سریع</h2>
                    <ul>
                        <li><a href="#">حساب من</a></li>
                        <li><a href="#">لیست محصولات</a></li>
                        <li><a href="#">محصولات پر طرفدار</a></li>
                        <li><a href="#">ارتبات با ما</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">دسته بندی سریع</h2>
                    <ul>
                        <li><a href="#">Inim</a></li>
                        <li><a href="#">HOCHIKI</a></li>
                        <li><a href="#">SIEMENS</a></li>
                        <li><a href="#">GENT</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-newsletter">
                    <h2 class="footer-wid-title">مشترک</h2>
                    <p>
                        با ثبت نام در این بخش از اخبار ما و آخرین محصولات مطلع شوید!
                    </p>
                    <div class="newsletter-form">
                        <form action="#">
                            <input type="email" placeholder="ایمیل خود را وارد کنید">
                            <input type="submit" value="ثبت">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End footer top area -->

<footer class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align: center">
                    <span>2019 HaminSepehr Co. All Rights Reserved</span>
            </div>
        </div>
    </div>
</footer> <!-- End footer bottom area -->

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


@yield('extra_js')


<script>
    jQuery(document).ready(function($){
        // jQuery sticky Menu
        $(".mainmenu-area").sticky({topSpacing:0});


        $('.product-carousel').owlCarousel({
            loop:false,
            nav:true,
            dots: false,
            navText: ['بعدی','قبلی'],
            margin:30,
            responsiveClass:true,
            dotsContainer: 'oh',
            responsive:{
                0:{
                    items:1,
                },
                600:{
                    items:3,
                },
                1000:{
                    items:5,
                }
            }
        });

        $('.related-products-carousel').owlCarousel({
            loop:true,
            nav:true,
            margin:20,
            dots: false,
            navText: ['بعدی','قبلی'],
            responsiveClass:true,
            dotsContainer: 'oh',
            responsive:{
                0:{
                    items:1,
                },
                600:{
                    items:2,
                },
                1000:{
                    items:2,
                },
                1200:{
                    items:3,
                }
            }
        });

        $('.brand-list').owlCarousel({
            loop:true,
            nav:true,
            dots: false,
            navText: ['بعدی','قبلی'],
            margin:20,
            dotsContainer: 'oh',
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                },
                600:{
                    items:3,
                },
                1000:{
                    items:4,
                }
            }
        });


        // // Bootstrap Mobile Menu fix
        // $(".navbar-nav li a").click(function(){
        //     $(".navbar-collapse").removeClass('in');
        // });

        // jQuery Scroll effect
        $('.navbar-nav li a, .scroll-to-up').bind('click', function(event) {
            var $anchor = $(this);
            var headerH = $('.header-area').outerHeight();
            $('html, body').stop().animate({
                scrollTop : $($anchor.attr('href')).offset().top - headerH + "px"
            }, 1200, 'easeInOutExpo');

            event.preventDefault();
        });

        // Bootstrap ScrollPSY
        $('body').scrollspy({
            target: '.navbar-collapse',
            offset: 95
        });

        @yield('js_ready_event')
        const loader = document.getElementById("loader");

        // Hide css loader
        loader.style.opacity = 0;
        setTimeout(()=>{loader.style.display = 'none';}, 700);

    });
</script>

<!-- Slider -->
{{--<script type="text/javascript" src="js/bxslider.min.js"></script>--}}
<script type="text/javascript" src="{{ URL::asset('vendors/ustora/js/bxslider.min.js') }}"></script>
{{--<script type="text/javascript" src="js/script.slider.js"></script>--}}
<script type="text/javascript" src="{{ URL::asset('vendors/ustora/js/script.slider.js') }}"></script>
</body>
</html>
