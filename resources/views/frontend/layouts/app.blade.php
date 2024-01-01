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
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('/assets/frontend/img/favicon.ico') }}">

    <!-- PAGE TITLE HERE -->
    <title>Vella Care</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! Html::style('/assets/frontend/css/bootstrap.min.css') !!}<!-- BOOTSTRAP STYLE SHEET -->
    {!! Html::style('/assets/frontend/css/fontawesome/css/font-awesome.min.css') !!}<!-- FONTAWESOME STYLE SHEET -->
    {!! Html::style('/assets/frontend/css/flaticon.min.css') !!}<!-- FLATICON STYLE SHEET -->
    {!! Html::style('/assets/frontend/css/animate.min.css') !!}<!-- ANIMATE STYLE SHEET -->
    {!! Html::style('/assets/frontend/css/owl.carousel.min.css') !!}<!-- OWL CAROUSEL STYLE SHEET -->
    {!! Html::style('/assets/frontend/css/bootstrap-select.min.css') !!}<!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
    {!! Html::style('/assets/frontend/css/magnific-popup.min.css') !!}<!-- MAGNIFIC POPUP STYLE SHEET -->
    {!! Html::style('/assets/frontend/css/loader.min.css') !!}<!-- LOADER STYLE SHEET -->
    {!! Html::style('/assets/frontend/css/style.css') !!}<!-- MAIN STYLE SHEET -->
    {!! Html::style('/assets/frontend/css/skin/skin-1.css') !!}<!-- THEME COLOR CHANGE STYLE SHEET -->
    {!! Html::style('/assets/frontend/css/switcher.css') !!}<!-- SIDE SWITCHER STYLE SHEET -->

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    {!! Html::style('/assets/frontend/plugins/revolution/revolution/css/settings.css') !!}<!-- REVOLUTION SLIDER CSS -->
    {!! Html::style('/assets/frontend/plugins/revolution/revolution/css/navigation.css') !!}<!-- REVOLUTION NAVIGATION STYLE -->
    @yield('external-style')

</head>

<body id="bg">

<div class="page-wraper">

    <!-- HEADER START -->
    <header class="site-header header-style-8 mobile-sider-drawer-menu">
        @include('frontend.includes.header-top')
        @include('frontend.includes.header')
    </header>
    <!-- HEADER END -->

    <!-- CONTENT START -->
    <div class="page-content">
        @yield('content')
    </div>
    <!-- CONTENT END -->
    @include('frontend.includes.footer')
</div>


<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="cssload-container">
            <div class="cssload-progress cssload-float cssload-shadow">
                <div class="cssload-progress-item"></div>
            </div>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->


<!-- JAVASCRIPT  FILES ========================================= -->
{!! Html::script('/assets/frontend/js/jquery-3.6.1.min.js') !!}<!-- JQUERY.MIN JS -->
{!! Html::script('/assets/frontend/js/popper.min.js') !!}<!-- POPPER.MIN JS -->
{!! Html::script('/assets/frontend/js/bootstrap.min.js') !!}<!-- BOOTSTRAP.MIN JS -->
{!! Html::script('/assets/frontend/js/bootstrap-select.min.js') !!}<!-- FORM JS -->
{!! Html::script('/assets/frontend/js/jquery.bootstrap-touchspin.min.js') !!}<!-- FORM JS -->
{!! Html::script('/assets/frontend/js/magnific-popup.min.js') !!}<!-- MAGNIFIC-POPUP JS -->
{!! Html::script('/assets/frontend/js/waypoints.min.js') !!}<!-- WAYPOINTS JS -->
{!! Html::script('/assets/frontend/js/counterup.min.js') !!}<!-- COUNTERUP JS -->
{!! Html::script('/assets/frontend/js/waypoints-sticky.min.js') !!}<!-- COUNTERUP JS -->
{!! Html::script('/assets/frontend/js/isotope.pkgd.min.js') !!}<!-- MASONRY  -->
{!! Html::script('/assets/frontend/js/imagesloaded.pkgd.min.js') !!}<!-- MASONRY  -->
{!! Html::script('/assets/frontend/js/owl.carousel.min.js') !!}<!-- OWL  SLIDER  -->
{!! Html::script('/assets/frontend/js/scrolla.min.js') !!}<!-- ON SCROLL CONTENT ANIMTE   -->
{!! Html::script('/assets/frontend/js/custom.js') !!}<!-- CUSTOM FUCTIONS  -->
{!! Html::script('/assets/frontend/js/shortcode.js') !!}<!-- SHORTCODE FUCTIONS  -->
<script>
    $(document).ready(function(){
        $('.circle-block-outer .nav-link').hover(function() {
            $(this).tab('show');
        });
    })
</script>

<!-- REVOLUTION JS FILES -->
{!! Html::script('/assets/frontend/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') !!}
{!! Html::script('/assets/frontend/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') !!}

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
{!! Html::script('/assets/frontend/plugins/revolution/revolution/js/extensions/revolution-plugin.js') !!}

<!-- REVOLUTION SLIDER FUNCTION  ===== -->
{!! Html::script('/assets/frontend/js/rev-script-1.js') !!}
@yield('external-script')


</body>

</html>

