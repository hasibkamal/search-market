@extends('frontend.layouts.app')
@section('content')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wrapper" style="background-image:url(/assets/frontend/images/banner/special-offer-banner.jpg);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
{{--                <h1 class="text-white">Special Offers</h1>--}}
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                <li>Special Offers</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->

    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">
        <div class="bg-service-team">
            <div class="container">
                <div class="section-content m-b20 ">
                    <div class="row">
                        @foreach($specialOffers as $specialOffer)
                        <div class="col-md-4 col-sm-6 m-b30">
                            <div class="wt-icon-box-wraper center  bg-gray-light p-a20">
                                <img width="100%" style="height: 250px;" src="{{ url('/uploads/special-offers/'.$specialOffer->image) }}" alt="{{ $specialOffer->name }}">
                                <div class="icon-content pt-3">
                                    <h5 class="wt-tilte text-uppercase">{{ $specialOffer->name }}</h5>
                                    <p>tk. {{ $specialOffer->price }}</p>
{{--                                    <a href="#" class="site-button  m-r15">More  <i class="fa fa-angle-double-right"></i></a>--}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- PAGINATION START -->
                {!! $specialOffers->links() !!}
                <!-- PAGINATION END -->
            </div>
        </div>
    </div>
    <!-- SECTION CONTENT  END -->
@endsection
