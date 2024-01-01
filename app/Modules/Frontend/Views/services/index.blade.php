@extends('frontend.layouts.app')
@section('content')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wrapper" style="background-image:url(/assets/frontend/images/banner/services.jpg);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
{{--                <h1 class="text-white">Services</h1>--}}
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                <li>Services</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->

    <!-- SECTION CONTENT -->
    <div class="section-full p-t80 p-b50  ">
        <div class="container">
            <div class="section-content">
                <div class="row">

                    @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 m-b30">
                        <div class="wt-box bg-white">
                            <div class="wt-media">
                                <a href="#"><img style="height: 250px;" width="100%" src="{{ url('/uploads/services/'.$service->image) }}" alt="{{ $service->name }}"></a>
                            </div>
                            <div class="wt-info p-a30 bg-gray">
                                <h4 class="wt-title m-t0"><a href="#">{{ $service->name }}</a></h4>
                                <p>{!! $service->description !!}</p>
                                <a href="{{ route('services.details',$service->id) }}" class="site-button">Book Service <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- PAGINATION START -->
            {!! $services->links() !!}
            <!-- PAGINATION END -->
        </div>
    </div>
    <!-- SECTION CONTENT END -->
@endsection
