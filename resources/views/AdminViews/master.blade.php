<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="fontiran.com:license" content="Y68A9">
    <link rel="icon" href="/build/images/favicon.ico" type="image/ico"/>
    <title>Gentelella Alela! | قالب مدیریت رایگان </title>


    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
{{--    <link href="vendors/bootstrap-rtl/dist/css/bootstrap-rtl.min.css" rel="stylesheet">--}}
    {{ HTML::style('vendors/bootstrap-rtl/dist/css/bootstrap-rtl.min.css') }}
    <!-- Font Awesome -->
{{--    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">--}}
    {{ HTML::style('vendors/font-awesome/css/font-awesome.min.css') }}
    <!-- NProgress -->
{{--    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">--}}
    {{ HTML::style('vendors/nprogress/nprogress.css') }}

    <!-- bootstrap-progressbar -->
{{--    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">--}}
    {{ HTML::style('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}
    <!-- iCheck -->
{{--    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">--}}
    {{ HTML::style('vendors/iCheck/skins/flat/green.css') }}
    <!-- bootstrap-daterangepicker -->
{{--    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">--}}
    {{ HTML::style('vendors/bootstrap-daterangepicker/daterangepicker.css') }}
    <!-- Custom Theme Style -->
{{--    <link href="build/css/custom.min.css" rel="stylesheet">--}}
    {{ HTML::style('build/css/custom.min.css') }}
    {{ HTML::style('build/css/animate.css') }}
    {{ HTML::style('build/css/mystyles.css') }}
    <!-- bulma -->
    {{ HTML::style('vendors/dropzone/dist/min/dropzone.min.css') }}

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />

    @yield('header')

</head>
<!-- /header content -->
<body class="nav-md">
<div class="container body">
    <div class="main_container">
    @include('AdminViews.sidebar')
    <!-- top navigation -->
    @include('AdminViews.header')
    <!-- /top navigation -->
        <!-- /header content -->

        <!-- page content -->
        <div class="right_col" role="main" style="min-height: 1697px;">
            @yield('content')
        </div>
        <!-- footer content -->

        <footer class="hidden-print">
            <div class="pull-left">
                Gentelella - قالب پنل مدیریت بوت استرپ <a href="https://colorlib.com">Colorlib</a> | پارسی شده توسط <a
                        href="https://morteza-karimi.ir">مرتضی کریمی</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>
<div id="lock_screen">
    <table>
        <tr>
            <td>
                <div class="clock"></div>
                <span class="unlock">
                    <span class="fa-stack fa-5x">
                      <i class="fa fa-square-o fa-stack-2x fa-inverse"></i>
                      <i id="icon_lock" class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                </span>
            </td>
        </tr>
    </table>
</div>
<!-- jQuery -->
<script src="/haminsepehr/public/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/haminsepehr/public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="/haminsepehr/public/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="/haminsepehr/public/vendors/nprogress/nprogress.js"></script>
<!-- bootstrap-progressbar -->
<script src="/haminsepehr/public/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="/haminsepehr/public/vendors/iCheck/icheck.min.js"></script>

<!-- bootstrap-daterangepicker -->
<script src="/haminsepehr/public/vendors/moment/min/moment.min.js"></script>

<script src="/haminsepehr/public/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Chart.js -->
<script src="/haminsepehr/public/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- jQuery Sparklines -->
<script src="/haminsepehr/public/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- gauge.js -->
<script src="/haminsepehr/public/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- Skycons -->
<script src="/haminsepehr/public/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="/haminsepehr/public/vendors/Flot/jquery.flot.js"></script>
<script src="/haminsepehr/public/vendors/Flot/jquery.flot.pie.js"></script>
<script src="/haminsepehr/public/vendors/Flot/jquery.flot.time.js"></script>
<script src="/haminsepehr/public/vendors/Flot/jquery.flot.stack.js"></script>
<script src="/haminsepehr/public/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="/haminsepehr/public/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="/haminsepehr/public/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="/haminsepehr/public/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="/haminsepehr/public/vendors/DateJS/build/production/date.min.js"></script>
<!-- JQVMap -->
<script src="/haminsepehr/public/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="/haminsepehr/public/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="/haminsepehr/public/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>

<!-- Custom Theme Scripts -->
<script src="/haminsepehr/public/build/js/custom.min.js"></script>
{{ HTML::script('build/js/wow.min.js') }}

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>
<script src="/haminsepehr/public/vendors/dropzone/dist/min/dropzone.min.js"></script>
<script>
    new WOW().init();
</script>

@yield('script')

</body>
</html>