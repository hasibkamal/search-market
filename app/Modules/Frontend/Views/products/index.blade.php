@extends('frontend.layouts.app')
@section('content')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wrapper" style="background-image:url(/assets/frontend/images/banner/product-banner.jpg);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
{{--                <h1 class="text-white">Products</h1>--}}
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                <li>Products</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->

    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <!-- SIDE BAR START -->
                    <div class="col-lg-12 col-md-12">

                        <aside  class="side-bar">

                            <!-- 13. SEARCH -->
                            <div class="widget bg-white ">
                                <div class="search-bx">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                            <input name="news-letter" type="text" class="form-control" placeholder="Write your text">
                                            <span class="input-group-btn">
                                                <button type="submit" class="site-button"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- SIDE BAR END -->
                    <div class="col-lg-12 col-md-12">
                        <!-- TITLE START -->
                        <div class="p-b10">
                            <h3 class="text-uppercase">Our Products</h3>
                            <div class="wt-separator-outer m-b30">
                                <div class="wt-separator style-icon">
                                    <i class="fa fa-leaf text-black"></i>
                                    <span class="separator-left site-bg-primary"></span>
                                    <span class="separator-right site-bg-primary"></span>
                                </div>
                            </div>
                        </div>
                        <!-- TITLE END -->

                        <div class="row">
                            @foreach($products as $product)
                            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                                <div class="wt-box wt-product-box">
                                    <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                        <img style="width: 100%; height: 250px;" src="{{ url('/uploads/products/'.$product->image) }}" alt="">
                                        <div class="overlay-bx">
                                            <div class="overlay-icon">
                                                <a href="{{ route('products.details',$product->id) }}">
                                                    <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                                </a>
                                                <a class="mfp-link" href="{{ route('products.details',$product->id) }}">
                                                    <i class="fa fa-eye wt-icon-box-xs"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wt-info  text-center">
                                        <div class="p-a10 bg-white">
                                            <h5 class="wt-title">
                                                <a href="javascript:;">{{ generateExcerpt($product->name,30) }}</a>
                                            </h5>
                                            <span class="price">
                                                <del>
                                                     <span><span class="Price-currencySymbol">tk.</span>{{ $product->price + $product->discount }}</span>
                                                </del>
                                                <ins>
                                                    <span><span class="Price-currencySymbol">tk.</span>{{ $product->price }}</span>
                                                </ins>
                                            </span>
{{--                                            <div class="rating-bx">--}}
{{--                                                <i class="fa fa-star"></i>--}}
{{--                                                <i class="fa fa-star"></i>--}}
{{--                                                <i class="fa fa-star"></i>--}}
{{--                                                <i class="fa fa-star"></i>--}}
{{--                                                <i class="fa fa-star"></i>--}}
{{--                                            </div>--}}
                                            <div class="p-t10">
                                                <a href="{{ route('products.details',$product->id) }}" class="site-button  m-r15">ADD TO CART  <i class="fa fa-angle-double-right"></i></a>
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
        </div>
    </div>
    <!-- SECTION CONTENT END -->
@endsection
