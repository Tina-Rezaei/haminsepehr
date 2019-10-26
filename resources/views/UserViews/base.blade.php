<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>World - Blog &amp; Magazine Template</title>

    <!-- Favicon  -->
{{--    <link rel="icon" href="/vendors/world/img/core-img/favicon.ico">--}}
    {{ HTML::style('vendors/world/img/core-img/favicon.ico') }}

<!-- Style CSS -->
{{--    <link rel="stylesheet" href="/vendors/world/style.css">--}}
    {{ HTML::style('vendors/world/style.css') }}

    @yield('header')

</head>

<body>
<!-- Preloader Start -->
<div id="preloader">
    <div class="preload-content">
        <div id="world-load"></div>
    </div>
</div>
<!-- Preloader End -->

<!-- ***** Header Area Start ***** -->
<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg">
                    <!-- Navbar Toggler -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <!-- Navbar -->
                    <div class="collapse navbar-collapse" id="worldNav">
                        <div id="search-wrapper">
                            <form action="#">
                                <input type="text" id="search" placeholder="Search something...">
                                <div id="close-icon"></div>
                                <input class="d-none" type="submit" value="">
                            </form>
                        </div>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="">Home</a>
                                    <a class="dropdown-item" href="catagory.html">Catagory</a>
                                    <a class="dropdown-item" href="single-blog.html">Single Blog</a>
                                    <a class="dropdown-item" href="regular-page.html">Regular Page</a>
                                    <a class="dropdown-item" href="contact.html">Contact</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Gadgets</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Lifestyle</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Video</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                        <!-- Search Form  -->
                    </div>
                    <!-- Logo -->
                    <a class="navbar-brand" href="index.html"><div style="background-image: url('{{asset('vendors/world/img/core-img/logo.jpg')}}');width:50px;height: 50px;background-size:cover;border-radius: 1000px " alt="Logo"></div></a>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ********** Hero Area Start ********** -->
@yield('heroarea')
<!-- ********** Hero Area End ********** -->

<div class="main-content-wrapper section-padding-100">
    <div class="container">
    <!-- Post Meta -->
    @yield('content')
    </div>
</div>

<!-- ***** Footer Area Start ***** -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="footer-single-widget">
                    <a href="#"><img src="/vendors/world/img/core-img/logo.png" alt=""></a>
                    <div class="copywrite-text mt-30">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="footer-single-widget">
                    <ul class="footer-menu d-flex justify-content-between">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Fashion</a></li>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Gadgets</a></li>
                        <li><a href="#">Video</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="footer-single-widget">
                    <h5>Subscribe</h5>
                    <form action="#" method="post">
                        <input type="email" name="email" id="email" placeholder="Enter your mail">
                        <button type="button"><i class="fa fa-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ***** Footer Area End ***** -->

<!-- jQuery (Necessary for All JavaScript Plugins) -->
{{--<script src="/vendors/world/js/jquery/jquery-2.2.4.min.js"></script>--}}
{{ HTML::script('vendors/world/js/jquery/jquery-2.2.4.min.js') }}
<!-- Popper js -->
{{--<script src="/vendors/world/js/popper.min.js"></script>--}}
{{ HTML::script('vendors/world/js/popper.min.js') }}
<!-- Bootstrap js -->
{{--<script src="/vendors/world/js/bootstrap.min.js"></script>--}}
{{ HTML::script('vendors/world/js/bootstrap.min.js') }}
<!-- Plugins js -->
{{--<script src="/vendors/world/js/plugins.js"></script>--}}
{{ HTML::script('vendors/world/js/plugins.js') }}
<!-- Active js -->
{{--<script src="/vendors/world/js/active.js"></script>--}}
{{ HTML::script('vendors/world/js/active.js') }}
</body>

