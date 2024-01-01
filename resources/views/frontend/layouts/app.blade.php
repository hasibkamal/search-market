<!DOCTYPE html>

<html lang="en">

<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="description" content="">
    @yield('meta')

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/assets/frontend/images/favicon.ico') }}">

    <!-- PAGE TITLE HERE -->
    <title>Search Market</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {!! Html::style('/assets/frontend/css/style.css') !!}
    {!! Html::style('/assets/frontend/css/bootstrap.min.css') !!}
    {!! Html::style('/assets/frontend/css/fontawesome.min.css') !!}
    {!! Html::style('/assets/frontend/css/animate.css') !!}
    {!! Html::style('/assets/frontend/css/themify-icons.css') !!}
    {!! Html::style('/assets/frontend/css/icofont.min.css') !!}
    {!! Html::style('/assets/frontend/css/bootstrap-icons.css') !!}
    {!! Html::style('/assets/frontend/css/bsnav.min.css') !!}
    {!! Html::style('/assets/frontend/css/preloader.css') !!}
    {!! Html::style('/assets/frontend/css/magnific-popup.css') !!}
    {!! Html::style('/assets/frontend/css/swiper-bundle.min.css') !!}
    {!! Html::style('/assets/frontend/css/responsive.css') !!}
    @yield('external-style')
</head>
<body>
@include('frontend.includes.header')
@yield('content')
@include('frontend.includes.footer')
<!-- JAVASCRIPT  FILES ========================================= -->
{!! Html::script('/assets/frontend/js/jquery-3.6.0.min.js') !!}
{!! Html::script('/assets/frontend/js/zoom.js') !!}
{!! Html::script('/assets/frontend/js/swiper-bundle.min.js') !!}
{!! Html::script('/assets/frontend/js/popper.min.js') !!}
{!! Html::script('/assets/frontend/js/bootstrap.min.js') !!}
{!! Html::script('/assets/frontend/js/bsnav.min.js') !!}
{!! Html::script('/assets/frontend/js/jquery.magnific-popup.min.js') !!}
{!! Html::script('/assets/frontend/js/isotope.pkgd.min.js') !!}
{!! Html::script('/assets/frontend/js/imagesloaded.pkgd.min.js') !!}
{!! Html::script('/assets/frontend/js/count-to.js') !!}
{!! Html::script('/assets/frontend/js/progress-bar.min.js') !!}
{!! Html::script('/assets/frontend/js/typed.js') !!}
{!! Html::script('/assets/frontend/js/jquery.appear.js') !!}
{!! Html::script('/assets/frontend/js/active-class.js') !!}
{!! Html::script('/assets/frontend/js/main.js') !!}
@yield('external-script')


</body>

</html>









