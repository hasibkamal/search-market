@extends('frontend.layouts.app')
@section('content')
    <!-- CONTENT START -->
    <div class="page-content">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wrapper" style="background-image:url(/assets/frontend/images/banner/product-banner.jpg);">
            <div class="overlay-main bg-black opacity-05"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
{{--                    <h1 class="text-white">Shopping Cart</h1>--}}
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-1">
                    <li><a href="javascript:void(0);">Home</a></li>
                    <li>Shopping Cart</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB  ROW END -->

        <!-- OUR BEST SERVICES SECTION  START-->
        <div class="section-full text-center p-tb50">
            <div class="container">

                <div class="section-content">
                    <div class="p-b30">
                        <h3 class="text-uppercase">Shopping Cart</h3>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                    </div>
                    <div id="no-more-tables">
                        <table class="table-bordered  table-condensed cf wt-responsive-table shopping-table">
                            <thead class="cf text-center site-bg-primary">
                            <tr>
                                <th>IMAGE</th>
                                <th>PRODUCT NAME</th>
                                <th class="numeric">PRICE</th>
                                <th class="numeric">QUANTITY</th>
                                <th class="numeric">TOTAL</th>
                                <th class="numeric">REMOVE</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                            $total = 0;
                            $grandTotal = 0;
                            @endphp
                            @forelse($products as $product)
                            @php
                                $total = $product['quantity'] * ($product['price']-$product['discount']);
                                $grandTotal += $total;
                            @endphp
                            <tr>
                                <td><img style="width: 110px; height: 110px;" src="@if(isset($product['image'])) {{ url('/uploads/products/'.$product['image']) }} @else /assets/frontend/images/cart/thumb/pic-2.jpg @endif" alt="{{ $product['name'] ?? null }}"></td>
                                <td>{{ $product['name'] ?? null }}</td>
                                <td class="numeric">{{ $product['price'] ?? null }}</td>
                                <td class="numeric">{{ $product['quantity'] ?? null }}</td>
                                <td class="numeric">{{ $total }}</td>
                                <td class="numeric"><a href="{{ route('products.remove-cart',$product['product_id']) }}"><i class="fa fa-times"></i></a></td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6">Nothing added to cart!</td>
                            </tr>
                            @endforelse
                            </tbody>
                        </table>
                        @if(count($products) > 0)
                        <div class="cart-buttons text-left">
                            <a href="{{ route('products.index') }}" class="m-b15 site-button text-uppercase">Continue Shopping</a>
                            <a href="{{ route('products.checkout-cart') }}" class="m-b15 site-button m-r15 text-uppercase">Checkout</a>
                            <table class="table-bordered  table-condensed cf wt-responsive-table">
                                <thead class="cf text-center site-bg-primary">
                                <tr>
                                    <th>TOTAL</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td data-title="Total">{{ $grandTotal }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
        <!-- OUR BEST SERVICES SECTION END -->
    </div>
    <!-- CONTENT END -->
@endsection
@section('external-script')

@endsection
