<!DOCTYPE html>
<html class=" js no-touch" lang="en"><head>
    <meta charset="utf-8">
    <title>Remember - Multipurpose bootstrap site template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your page description here">
    <meta name="author" content="">

    <!-- css -->
{{--    <link href="css/bootstrap.css" rel="stylesheet">--}}
    {{ HTML::style('vendors/Remember/css/bootstrap.css') }}
{{--    <link href="css/bootstrap-responsive.css" rel="stylesheet">--}}
    {{ HTML::style('vendors/Remember/css/bootstrap-responsive.css') }}
{{--    <link href="css/prettyPhoto.css" rel="stylesheet">--}}
    {{ HTML::style('vendors/Remember/css/prettyPhoto.css') }}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
{{--    <link href="css/style.css" rel="stylesheet">--}}
    {{ HTML::style('vendors/Remember/css/style.css') }}

<!-- Theme skin -->
    <link id="t-colors" href="color/default.css" rel="stylesheet">
    {{ HTML::style('vendors/Remember/color/default.css') }}
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="ico/favicon.png">
    @yield('header')
    <!-- =======================================================
      Theme Name: Remember
      Theme URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>
<body>
    <div id="wrapper">
        <!-- start header -->
        <header>
            <div class="container">

                <div class="row nomargin">
                    <div class="span4">
                        <div class="logo">
                            <h1><a href="index.html"><i class="icon-tint"></i> Remember</a></h1>
                        </div>
                    </div>
                    <div class="span8">
                        <div class="navbar navbar-static-top">
                            <div class="navigation">
                                <nav>
                                    <ul class="nav topnav bold">
                                        <li class="active">
                                            <a href="index.html">Home</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Features <i class="icon-angle-down"></i></a>
                                            <ul class="dropdown-menu bold">
                                                <li><a href="typography.html">Typography</a></li>
                                                <li><a href="components.html">Components</a></li>
                                                <li><a href="icons.html">Icons</a></li>
                                                <li><a href="icon-variations.html">Icon variations</a></li>

                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Pages <i class="icon-angle-down"></i></a>
                                            <ul class="dropdown-menu bold">
                                                <li><a href="about.html">About us</a></li>
                                                <li><a href="pricingbox.html">Pricing boxes</a></li>
                                                <li><a href="404.html">404</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Portfolio <i class="icon-angle-down"></i></a>
                                            <ul class="dropdown-menu bold">
                                                <li><a href="portfolio-2cols.html">Portfolio 2 columns</a></li>
                                                <li><a href="portfolio-3cols.html">Portfolio 3 columns</a></li>
                                                <li><a href="portfolio-4cols.html">Portfolio 4 columns</a></li>
                                                <li><a href="portfolio-detail.html">Portfolio detail</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Blog <i class="icon-angle-down"></i></a>
                                            <ul class="dropdown-menu bold">
                                                <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                                <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                                <li><a href="post-left-sidebar.html">Post left sidebar</a></li>
                                                <li><a href="post-right-sidebar.html">Post right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact </a>
                                        </li>
                                    </ul>
                                </nav><select class="selectmenu"><option value="" selected="">Go to..</option><option value="index.html"> Home</option><option value="#"> Features </option><option value="typography.html"> -  Typography</option><option value="components.html"> -  Components</option><option value="icons.html"> -  Icons</option><option value="icon-variations.html"> -  Icon variations</option><option value="#"> Pages </option><option value="about.html"> -  About us</option><option value="pricingbox.html"> -  Pricing boxes</option><option value="404.html"> -  404</option><option value="#"> Portfolio </option><option value="portfolio-2cols.html"> -  Portfolio 2 columns</option><option value="portfolio-3cols.html"> -  Portfolio 3 columns</option><option value="portfolio-4cols.html"> -  Portfolio 4 columns</option><option value="portfolio-detail.html"> -  Portfolio detail</option><option value="#"> Blog </option><option value="blog-left-sidebar.html"> -  Blog left sidebar</option><option value="blog-right-sidebar.html"> -  Blog right sidebar</option><option value="post-left-sidebar.html"> -  Post left sidebar</option><option value="post-right-sidebar.html"> -  Post right sidebar</option><option value="contact.html"> Contact </option></select>
                            </div>
                            <!-- end navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section id="intro">
            <div class="intro-content">
                <h2>Welcome to Remember!</h2>
                <h3>Lorem ipsum dolor sit amet, elit persecuti efficiendi</h3>
                <div>
                    <a href="#content" class="btn-get-started scrollto">Get Started</a>
                </div>
            </div>
        </section>
        <section id="content">
            <div class="container">
                @yield('content')
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <div class="widget">
                            <div class="footer_logo">
                                <h3><a href="index.html"><i class="icon-tint"></i> Remember</a></h3>
                            </div>
                            <address>
                                <strong>Remember company Inc.</strong><br>
                                Somestreet KW 101, Park Village W.01<br>
                                Jakarta 13426 Indonesia
                            </address>
                            <p>
                                <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                                <i class="icon-envelope-alt"></i> email@domainname.com
                            </p>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="widget">
                            <h5 class="widgetheading">Browse pages</h5>
                            <ul class="link-list">
                                <li><a href="#">Our company</a></li>
                                <li><a href="#">Terms and conditions</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Press release</a></li>
                                <li><a href="#">What we have done</a></li>
                                <li><a href="#">Our support forum</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="span4">
                        <div class="widget">
                            <h5 class="widgetheading">From flickr</h5>
                            <div class="flickr_badge">
                                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="span6">
                            <div class="copyright">
                                <p><span>© Remember Inc. All right reserved</span></p>
                            </div>

                        </div>

                        <div class="span6">
                            <div class="credits">
                                <!--
                                  All the links in the footer should remain intact.
                                  You can delete the links only if you purchased the pro version.
                                  Licensing information: https://bootstrapmade.com/license/
                                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Remember
                                -->
                                Created by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <a href="#" class="scrollup" style="display: block;"><i class="icon-angle-up icon-rounded icon-bglight icon-2x"></i></a>
{{--    <script src="js/jquery.js"></script>--}}
    {{ HTML::script('vendors/Remember/js/jquery.js') }}
{{--    <script src="js/jquery.easing.1.3.js"></script>--}}
    {{ HTML::script('vendors/Remember/js/jquery.easing.1.3.js') }}
{{--    <script src="js/bootstrap.js"></script>--}}
    {{ HTML::script('vendors/Remember/js/bootstrap.js') }}
{{--    <script src="js/modernizr.custom.js"></script>--}}
    {{ HTML::script('vendors/Remember/js/modernizr.custom.js') }}
{{--    <script src="js/toucheffects.js"></script>--}}
    {{ HTML::script('vendors/Remember/js/toucheffects.js') }}
{{--    <script src="js/google-code-prettify/prettify.js"></script>--}}
    {{ HTML::script('vendors/Remember/js/google-code-prettify/prettify.js') }}
{{--    <script src="js/jquery.prettyPhoto.js"></script>--}}
    {{ HTML::script('vendors/Remember/js/jquery.prettyPhoto.js') }}
{{--    <script src="js/portfolio/jquery.quicksand.js"></script>--}}
    {{ HTML::script('vendors/Remember/js/portfolio/jquery.quicksand.js') }}
{{--    <script src="js/portfolio/setting.js"></script>--}}
    {{ HTML::script('vendors/Remember/js/portfolio/setting.js') }}
{{--    <script src="js/animate.js"></script>--}}
    {{ HTML::script('vendors/Remember/js/animate.js') }}
    <!-- Template Custom JavaScript File -->
{{--    <script src="js/custom.js"></script>--}}
    {{ HTML::script('vendors/Remember/js/custom.js') }}
</body>
