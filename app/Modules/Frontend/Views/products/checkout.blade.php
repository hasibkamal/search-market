@extends('frontend.layouts.app')
@section('content')
    <!-- CONTENT START -->
    <div class="page-content">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wrapper" style="background-image:url(/assets/frontend/images/banner/product-banner.jpg);">
            <div class="overlay-main bg-black opacity-05"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
{{--                    <h1 class="text-white">Checkout</h1>--}}
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-1">
                    <li><a href="javascript:void(0);">Home</a></li>
                    <li>Checkout</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB  ROW END -->

        <!-- SECTION CONTENT START -->
        <div class="section-full p-t80 p-b50">

            <!-- PRODUCT DETAILS -->
            <div class="container woo-entry">


                <!-- SECTION CONTENT START -->
                <div class="section-content">
                    <div class="row">
                        <!-- FROM STYEL 1 -->
                        <div class="col-md-6 m-b30">
                            <div class="section-head">
                                <h3 class="text-uppercase">Billing Information</h3>
                                <div class="wt-separator-outer">
                                    <div class="wt-separator style-icon">
                                        <i class="fa fa-leaf text-black"></i>
                                        <span class="separator-left site-bg-primary"></span>
                                        <span class="separator-right site-bg-primary"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="wt-box">
                                <form>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control"  placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control"  placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Company Name</label>
                                        <input type="text" class="form-control" placeholder="Company Name">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" class="form-control"  placeholder="Enter Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="email" class="form-control"  placeholder="Enter email">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <select class="form-control selectpicker">
                                                    <option>Usa</option>
                                                    <option>China</option>
                                                    <option>india</option>
                                                    <option>australia</option>
                                                    <option>japan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>State / City</label>
                                                <select class="form-control selectpicker">
                                                    <option>Los Angeles</option>
                                                    <option>Chicago</option>
                                                    <option>Phoenix</option>
                                                    <option>San Diego</option>
                                                    <option>Dallas</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Town</label>
                                                <select class="form-control selectpicker">
                                                    <option>Columbia</option>
                                                    <option>Berkeley</option>
                                                    <option>The Woodlands</option>
                                                    <option>Plano</option>
                                                    <option>Boulder</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>EZIP / Post Code</label>
                                                <input type="text" class="form-control"  placeholder="EZIP / Post Code">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control m-b30"  placeholder="Address 1">
                                        <input type="text" class="form-control"  placeholder="Address 2">
                                    </div>

                                    <div class="form-group form-inline">
                                        <div class="radio">
                                            <input id="checkmeout1" name="Public" value="checkmeout" type="checkbox">
                                            <label for="checkmeout1">Ship to the same address</label>
                                        </div>
                                    </div>

                                    <button type="submit" value="submit"  class="site-button">Save and Deliver Here</button>

                                </form>
                            </div>
                        </div>

                        <!-- FROM STYEL 1 WITH ICON -->
                        <div class="col-md-6 m-b30">
                            <div class="section-head">
                                <h3 class="text-uppercase">Your Order</h3>
                                <div class="wt-separator-outer">
                                    <div class="wt-separator style-icon">
                                        <i class="fa fa-leaf text-black"></i>
                                        <span class="separator-left site-bg-primary"></span>
                                        <span class="separator-right site-bg-primary"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="wt-box your-order-list">
                                <ul>
                                    <li>L’Oreal Hair Spa Nourishing Creambath <strong class="pull-right site-text-primary">$15.00</strong></li>
                                    <li>Spa Fit Smoothing & Refining Scrub By The Body Shop <strong class="pull-right site-text-primary">$150.00</strong></li>
                                    <li>Avon Planet Spa Himalayan Goji Berry Conditioning <strong class="pull-right site-text-primary">$15.00</strong></li>
                                    <li>Swedish Spa Beauty Wonder Oil By Oriflame <strong class="pull-right site-text-primary">$20.00</strong></li>
                                    <li>Bio Argan Oil By Lakme <strong class="pull-right site-text-primary">$30.00</strong></li>

                                    <li><b> Cart Subtotal</b><strong class="pull-right site-text-primary">$230.00</strong></li>
                                    <li><b> Shipping</b><strong class="pull-right site-text-primary">$50.00</strong></li>
                                    <li><b> Cart Total</b><strong class="pull-right site-text-primary">$280.00</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SECTION CONTENT END -->

            </div>
            <!-- PRODUCT DETAILS -->

        </div>
        <!-- CONTENT CONTENT END -->
    </div>
    <!-- CONTENT END -->
@endsection
@section('external-script')

@endsection
