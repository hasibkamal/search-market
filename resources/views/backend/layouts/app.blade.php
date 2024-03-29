<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('meta')

    <title>{{ env('APP_NAME','Application') }} | @yield('title','Administration')</title>

    <!-- Font Awesome Icons -->
    <link rel="icon" type="image/x-icon" href="{{ url('/assets/backend/img/upload.png') }}">
{{--    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">--}}
    {!! Html::style('/assets/backend/plugins/fontawesome-free/css/all.min.css') !!}
    {!! Html::style('/assets/backend/plugins/toaster/css/toaster.min.css') !!}
    {!! Html::style('/assets/backend/dist/css/adminlte.min.css') !!}
    {!! Html::style('/assets/backend/dist/css/custom.css') !!}
{{--    {!! Html::style('/assets/backend/dist/css/jquery.steps.css') !!}--}}
    {!! Html::style('/assets/backend/plugins/sweet-alert/css/sweetalert.min.css') !!}
    {!! Html::style('/assets/backend/dist/css/bootstrap-datepicker3.css') !!}
    {!! Html::style('/assets/backend/dist/css/select2.min.css') !!}
    {!! Html::style('assets/backend/plugins/select2/css/select2.min.css') !!}
    @yield('header-css')
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    <!-- Navbar -->
    @include('backend.includes.header')

    <!-- Main Sidebar Container -->
    @include('backend.includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">

        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @include('backend.includes.messages')
                @yield('content')
            </div>
            <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('backend.includes.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
{!! Html::script('/assets/backend/plugins/jquery/jquery.min.js') !!}
{!! Html::script('/assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}
{!! Html::script('/assets/backend/plugins/toaster/js/toaster.min.js') !!}
{!! Html::script('/assets/backend/dist/js/adminlte.js') !!}
{!! Html::script('/assets/backend/plugins/sweet-alert/js/sweetalert.min.js') !!}
{!! Html::script('/assets/backend/plugins/jquery/jquery.validate.min.js') !!}
{{--{!! Html::script('/assets/backend/dist/js/jquery.steps.min.js') !!}--}}
{!! Html::script('/assets/backend/dist/js/bootstrap-datepicker.min.js') !!}
{!! Html::script('/assets/backend/dist/js/select2.min.js') !!}
{{--{!! Html::script('/assets/backend/dist/js/moment.min.js') !!}--}}
{!! Html::script('/assets/backend/dist/js/custom.js') !!}
{!! Html::script('/assets/backend/dist/js/common.js') !!}

@if(session()->has('success'))
    {!! Toastr::success(session('success'), 'Success'); !!}
@endif

@if(session()->has('warning'))
    {!! Toastr::warning(session('warning'), 'Warning'); !!}
@endif

@if(session()->has('error'))
    {!! Toastr::error(session('error'), 'Error'); !!}
@endif

@if(session()->has('info'))
    {!! Toastr::info(session('info'), 'Info'); !!}
@endif

{!! Toastr::message() !!}

@yield('footer-script')
</body>

</html>
