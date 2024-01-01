@extends('frontend.layouts.app')
@section('content')
    <div class="multiple-market-section">
        <div class="container">
            <div class="title">
                <h1>Market <span>List</span></h1>
            </div>
            <div class="row pt-5">
                <div class="col-lg-12">
                    @foreach($markets as $market)
                    <div class="single-market">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="image-part">
                                    <img style="width: 100%; height: 400px;" src="{{ url('/uploads/markets/'.$market->image) }}">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <div class="content-part">
                                    <h3>{{ $market->name }}</h3>
                                    <p>{{ $market->location }}</p>
                                    <p>Open <b>9am</b> Closes <b> 8pm</b></p>
                                    <p><b>Contact : 01622254125 </b></p>
                                    <div class="content-part-button">
                                        <a href="shop.html">All Shops</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
