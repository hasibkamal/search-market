@extends('frontend.layouts.app')
@section('content')
    <div class="shop-section" style="margin-top: 100px;">
        <div class="container">
            <div class="title">
                <h1> Shop <span>List</span></h1>
                <h1><span>{{ $market->name }}</span></h1>
            </div>
            <div class="row g-4">
                @foreach($shops as $shop)
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="single-shop">
                        <div class="image-part">
                            <a href="#">
                                <img style="width: 100%;" src="{{ url('/uploads/shops/'.$shop->image) }}">
                            </a>
                        </div>
                        <div class="content-part">
                            <h4> {{ $shop->name }}</h4>
                            <p><b>Proprietor :</b> {{ $shop->proprietor }} </p>
                            <p><b>Address:</b> {{ $shop->address }}</p>
                            <p><b>Phone: </b> {{ $shop->phone }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
