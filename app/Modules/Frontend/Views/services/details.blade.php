@extends('frontend.layouts.app')
@section('content')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wrapper" style="background-image:url(/assets/frontend/images/banner/services.jpg);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
{{--                <h1 class="text-white">Service Details</h1>--}}
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                <li>Product Details</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->

    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">

        <!-- PRODUCT DETAILS -->
        <div class="container woo-entry">
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong>
                @foreach ($errors->all() as $error)
                    {!! $error !!}<br/>
                @endforeach
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa fa-times"></i></button>
            </div>
            @elseif (session()->get('flash_success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Thank you!</strong>
                @if(is_array(json_decode(session()->get('flash_success'), true)))
                    {!! implode('', session()->get('flash_success')->all(':message<br/>')) !!}
                @else
                    {!! session()->get('flash_success') !!}
                @endif
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="fa fa-times"></i></button>
            </div>
            @endif

            <div class="row m-b30">
                <div class="col-lg-4 col-md-8 m-b30">
                    <div class="wt-box wt-product-gallery">
                        <div class="mfp-gallery">
                            <div class="wt-box">
                                <img style="width: 100%; height: 300px;" src="{{ url('/uploads/services/'.$service->image) }}" alt="{{ $service->name }}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="wt-post-title ">
                        <h3 class="post-title"><a href="javascript:void(0);">{{ $service->name }}</a></h3>
                    </div>
                    <div class="wt-post-text">
                        <p class="m-b10">{!! $service->description !!}</p>
                    </div>
                    <div class="wt-post-text">
                        {!! Form::open(['route'=>'services.request', 'method'=>'post','enctype'=>'multipart/form-data']) !!}
                        {!! Form::hidden('service_id',$service->id) !!}
                        <div class="row">
                            <div class="col-md-4 form-group">
                                {!! Form::label('booking_date','Booking Date') !!}
                                {!! Form::date('booking_date','',['class'=>$errors->has('name')?'form-control is-invalid':'form-control','required'=>true]) !!}
                            </div>

                            <div class="col-md-4 form-group">
                                {!! Form::label('booking_time','Booking Time') !!}
                                {!! Form::date('booking_time','',['class'=>$errors->has('name')?'form-control is-invalid':'form-control','required'=>true]) !!}
                            </div>

                            <div class="col-md-4 form-group">
                                {!! Form::label('branch_id','Choose Branch') !!}
                                {!! Form::select('branch_id',$branches,'',['class'=>$errors->has('branch_id')?'form-control is-invalid':'form-control','placeholder'=>'Choose Branch','required'=>true]) !!}
                            </div>

                            <div class="col-md-4 form-group">
                                {!! Form::label('name','Name') !!}
                                {!! Form::text('name','',['class'=>$errors->has('name')?'form-control is-invalid':'form-control','placeholder'=>'Name','required'=>true]) !!}
                            </div>

                            <div class="col-md-4 form-group">
                                {!! Form::label('mobile','Mobile Number') !!}
                                {!! Form::text('mobile','',['class'=>$errors->has('mobile')?'form-control is-invalid':'form-control','placeholder'=>'Mobile Number','required'=>true]) !!}
                            </div>

                            <div class="col-md-4 form-group">
                                {!! Form::label('email','Email Address') !!}
                                {!! Form::email('email','',['class'=>$errors->has('email')?'form-control is-invalid':'form-control','placeholder'=>'Email Address']) !!}
                            </div>

                            <div class="col-md-6 form-group">
                                <button type="submit" class="btn btn-primary site-button pull-left"><i class="fa fa-paper-plane"></i> Confirm Service</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- PRODUCT DETAILS -->
    </div>
    <!-- CONTENT CONTENT END -->
@endsection
