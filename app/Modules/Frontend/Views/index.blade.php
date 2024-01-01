@extends('frontend.layouts.app')
@section('content')
    <!-- SLIDER START -->
    <div id="rev_slider_1050_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="webproduct-light" data-source="gallery" style="background-color:transparent;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
        <div id="rev_slider_1050_1" class="slider-dots rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
            <ul>
                <!-- SLIDE  -->
                @foreach($sliders as $slider)
                <li data-index="rs-2938" data-transition="slideleft" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"   data-thumb="images/main-slider/slider2/slide1.jpg"  data-rotate="0"  data-fsslotamount="7" data-saveperformance="off"  data-title="" data-param1="Additional Text" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ url('/uploads/sliders/'.$slider->image) }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->


                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption WebProduct-Title   tp-resizeme"
                         id="slide-2938-layer-01"
                         data-x="['left','left','left','left']" data-hoffset="['60','60','20','20']"
                         data-y="['middle','middle','top','top']" data-voffset="['-80','-80','200','130']"
                         data-fontsize="['57','55','55','30']"
                         data-lineheight="['65','65','65','65']"
                         data-width="['700','700','700','300']"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 11;
                                white-space: nowrap;
                                text-transform:uppercase;">
                        <div class="text-secondry"><span class="site-text-primary">{{ $slider->name }}</span></div>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption WebProduct-SubTitle   tp-resizeme"
                         id="slide-2938-layer-02"
                         data-x="['left','left','left','left']" data-hoffset="['60','60','20','20']"
                         data-y="['middle','middle','top','top']" data-voffset="['0','0','280','180']"
                         data-fontsize="['55','55','55','30']"
                         data-lineheight="['75','75','75','75']"
                         data-width="['700','700','700','300']"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1250,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 12;
                                white-space: nowrap;
                                text-transform:uppercase;
                               	font-weight: 700;
                                ">
                        <div class="text-secondry">
                            <span class="site-text-primary">{{ $slider->title }}</span>
                        </div>
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption WebProduct-Content   tp-resizeme"
                         id="slide-2938-layer-03"
                         data-x="['left','left','left','left']" data-hoffset="['60','60','20','20']"
                         data-y="['middle','middle','top','top']" data-voffset="['80','80','380','250']"
                         data-fontsize="['21','21','24','18']"
                         data-lineheight="['28','28','32','26']"
                         data-width="['700','700','700','300']"
                         data-height="['none','none','76','68']"
                         data-whitespace="normal"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                         data-textAlign="['left','left','left','left']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 13; white-space: normal;">
                        <div class="text-secondry">{!! $slider->description !!}</div>
                    </div>

                </li>
                @endforeach
                <!-- SLIDE  -->
            </ul>

        </div>
    </div>
    <!-- SLIDER END -->

    <!-- ABOUT SECTION START -->
    <div class="section-full p-t100 p-b70 bg-bottom-center bg-full-width bg-no-repeat">
        <div class="container ">
            <div class="section-content about4-section">
                <div class="row">
                    <div class="col-md-5 col-sm-5 m-b30">
                        <div class="about4-section-pic ">
                            <div class="wt-media">
                                <img src="{{ config('misc.content.welcome_image') }}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7 col-sm-7 m-b30">
                        <div class="about4-content">
                            <h3 class="text-uppercase text-secondry">We Provide</h3>
                            <h2><span class="site-text-primary">Welcome to </span> {{ $siteConfiguration->name ?? "Vella Care" }} </h2>
                            <p><strong>{{ config('misc.content.welcome_headline') }}</strong></p>
                            <p>{{ config('misc.content.welcome_text') }}</p>
                            <div class="text-left p-b30">
                                <img src="{{ config('misc.content.welcome_signature') }}" alt="Vella">
                            </div>
                            <div>
                                <a href="{{ route('about-us.index') }}" class="site-button radius-sm">
                                    <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span>
                                </a>
                                <a href="{{ route('services.index') }}" class="site-button-secondry radius-sm">
                                    <span class="font-weight-700 inline-block text-uppercase p-lr15">Services</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT COMPANY SECTION END -->

    <!-- OUR SERVICES SECTION START  -->
    <div class="section-full bg-gray p-t100 p-b70 bg-repeat" style="background-image:url(images/background/bg-6.jpg);">
        <div class="container-fluid">
            <!-- TITLE START-->
            <div class="section-head text-center">
                <h1><span class="site-text-primary">Services </span> For You</h1>
                <div class="wt-separator-outer ">
                    <div class="wt-separator style-icon">
                        <i class="fa fa-leaf text-black"></i>
                        <span class="separator-left site-bg-primary"></span>
                        <span class="separator-right site-bg-primary"></span>
                    </div>
                </div>
                <p>{{ config('misc.content.services_headline') }}</p>
            </div>
            <!-- TITLE END-->
            <div class="section-content   our-services-index">
                <div class="owl-carousel home-carousel-2 m-b30">
                    @foreach($services as $service)
                    <div class="item">
                        <div class="wt-box p-t50">
                            <div class="wt-media site-text-primary m-b20 radius-bx circle-effect-1 wt-img-overlay11">

                                <img style="height: 280px;" width="100%" src="{{ url('/uploads/services/'.$service->image) }}" class="radius-bx"  alt="">
                                <div class="text-center p-a30 wt-img-overlay11-content text-white">
                                    <div class="overlay-11-detail">
                                        <div class="overlay-11-info">
{{--                                            <p class="m-b10">--}}
{{--                                                {!! $service->name !!}--}}
{{--                                            </p>--}}
                                            <h4 class="m-b0"><a class="site-button" href="{{ route('services.details',$service->id) }}">Book Service <i class="fa fa-angle-double-right"></i></a></h4>
                                        </div>
                                    </div>
                                    <div class="site-bg-primary bg-color radius-bx opacity-08"></div>
                                </div>

{{--                                <div class="price-tag">--}}
{{--                                    <div class="price-circle bg-white text-center site-text-primary radius-bx">--}}
{{--                                        <span class="font-18">$24</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                            <div class="wt-info p-t30 text-center">
                                <h2>{{ $service->name }}</h2>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    <!-- OUR SERVICES SECTION END  -->

    <!-- PRICING SECTION START  -->
{{--    <div class="section-full bg-gray p-t100 p-b70">--}}
{{--        <div class="container">--}}
{{--            <!-- TITLE START-->--}}
{{--            <div class="section-head text-center">--}}
{{--                <h1><span class="site-text-primary">Our</span> Pricing</h1>--}}
{{--                <div class="wt-separator-outer">--}}
{{--                    <div class="wt-separator style-icon">--}}
{{--                        <i class="fa fa-leaf text-black"></i>--}}
{{--                        <span class="separator-left site-bg-primary"></span>--}}
{{--                        <span class="separator-right site-bg-primary"></span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>--}}
{{--            </div>--}}
{{--            <!-- TITLE END-->--}}
{{--            <div class="section-content">--}}
{{--                <div class="owl-carousel our-pricing-carousel owl-btn-vertical-center owl-btn-hover nav nav-tabs">--}}

{{--                    @foreach($services as $key => $service)--}}
{{--                    <div class="item @if(!$key) active-arrow active @endif">--}}
{{--                        <a data-bs-toggle="tab" href="#pricing-item{{ $service->id }}" class="tab-block">--}}
{{--                            <div class="our-pricing-tab  radius-sm bdr-1 bdr-gray">--}}
{{--                                <div class="wt-icon-box-wraper center  p-lr10">--}}
{{--                                    <div class="icon-lg m-b5">--}}
{{--                                        <span class="icon-cell  text-black"><i class="flaticon-people"></i></span>--}}
{{--                                        <img class="icon-cell radius-bx mt-3" src="{{ url('/uploads/services/'.$service->image) }}" />--}}
{{--                                    </div>--}}
{{--                                    <div class="icon-content">--}}
{{--                                        <span class="wt-tilte text-uppercase p-b10 inline-block font-weight-600">{{ $service->name }}</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}

{{--                <div class="tab-content m-b30">--}}
{{--                    @foreach($services as $key => $service)--}}
{{--                    <div id="pricing-item{{ $service->id }}" class="pricing-tab-content-block tab-pane @if(!$key) active-arrow @endif">--}}
{{--                        <div class="section-content p-t50">--}}
{{--                            <!-- TABS DEFAULT NAV LEFT -->--}}
{{--                            <div id="pricing-tab1-1" class="tab-pane active">--}}
{{--                                <div class="pricing-tab-inner">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-lg-6 col-md-12">--}}
{{--                                            <div class="wt-media">--}}
{{--                                                <img src="{{ url('/uploads/services/'.$service->image) }}" alt="">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-lg-6 col-md-12">--}}
{{--                                            <div class="wt-tilte">--}}
{{--                                                <h3 class="font-26 font-weight-400">{{ $service->name }}</h3>--}}
{{--                                                <h4 class="site-text-primary">$40 - $80</h4>--}}
{{--                                                <p>{!! $service->description !!}</p>--}}
{{--                                                <a href="{{ route('services.index') }}" class="site-button skew-icon-btn radius-sm">--}}
{{--                                                    <span class="font-weight-700 inline-block text-uppercase p-lr15">More</span>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
    <!-- PRICING SECTION END  -->

    <!-- WELCOME SECTION START -->
    <div class="section-full p-t100 p-b70 bg-bottom-center bg-full-width bg-no-repeat" style="background-image:url(/assets/frontend/images/background/bg-1.png);">
        <div class="container ">
            <div class="section-head text-center">
                <h2><span class="site-text-primary">Good for </span> your health </h2>
                <div class="wt-separator-outer ">
                    <div class="wt-separator style-icon">
                        <i class="fa fa-leaf text-black"></i>
                        <span class="separator-left site-bg-primary"></span>
                        <span class="separator-right site-bg-primary"></span>
                    </div>
                </div>

                <p>
                    {{ config('misc.content.good_for_health_headline') }}
                </p>

            </div>
            <div class="section-content circle-block-outer" data-bs-toggle="tab-hover">
                <div class="row  nav nav-tab">

                    <div class="col-lg-4 col-md-12 m-b30">
                        <div class="nav-item">
                            <a class="nav-link active wt-icon-box-wraper right p-a10 m-b20" href="#tab1" data-bs-toggle="tab">
                                <div class="icon-md site-text-primary radius">
                                    <span class="icon-cell  site-text-primary"><img src="/assets/frontend/images/icon/candle-1.png" alt=""></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase">Naturally Spa</h4>
                                    <p>A wonderful serenity has taken possession of my entire soul.</p>
                                </div>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link wt-icon-box-wraper right p-a10 m-r30 m-b20" href="#tab2" data-bs-toggle="tab">
                                <div class="icon-md site-text-primary radius">
                                    <span class="icon-cell  site-text-primary"><img src="/assets/frontend/images/icon/leaves.png" alt=""></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase">Herbal & Natural</h4>
                                    <p>A wonderful serenity has taken possession of my entire.</p>
                                </div>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link wt-icon-box-wraper right p-a10 m-b20" href="#tab3" data-bs-toggle="tab">
                                <div class="icon-md site-text-primary radius">
                                    <span class="icon-cell  site-text-primary"><img src="/assets/frontend/images/icon/lotus-position.png" alt=""></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase">Effective Treatments</h4>
                                    <p>A wonderful serenity has taken possession of my entire soul.</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 m-b30">
                        <div class="circle-content-pic tab-content ">
                            <div id="tab1" class="tab-pane in active">
                                <div class="wt-box">
                                    <div class="wt-media site-text-primary m-b20 ">
                                        <img src="{{ config('misc.content.good_for_health_image') }}" class="radius-bx" alt="">
                                    </div>
                                </div>
                            </div>

                            <div id="tab2" class="tab-pane">
                                <div class="wt-box">
                                    <div class="wt-media site-text-primary m-b20">
                                        <img src="/assets/frontend/images/good_for_health.jpg" class="radius-bx" alt="">
                                    </div>
                                </div>
                            </div>

                            <div id="tab3" class="tab-pane">
                                <div class="wt-box">
                                    <div class="wt-media site-text-primary m-b20">
                                        <img src="{{ config('misc.content.good_for_health_image') }}" class="radius-bx" alt="">
                                    </div>
                                </div>
                            </div>

                            <div id="tab4" class="tab-pane">
                                <div class="wt-box">
                                    <div class="wt-media site-text-primary m-b20">
                                        <img src="{{ config('misc.content.good_for_health_image') }}" class="radius-bx" alt="">
                                    </div>
                                </div>
                            </div>

                            <div id="tab5" class="tab-pane">
                                <div class="wt-box">
                                    <div class="wt-media site-text-primary m-b20">
                                        <img src="{{ config('misc.content.good_for_health_image') }}" class="radius-bx" alt="">
                                    </div>
                                </div>
                            </div>

                            <div id="tab6" class="tab-pane">
                                <div class="wt-box">
                                    <div class="wt-media site-text-primary m-b20">
                                        <img src="{{ config('misc.content.good_for_health_image') }}" class="radius-bx" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 m-b30">
                        <div class="nav-item">
                            <a class="nav-link wt-icon-box-wraper left p-a10 m-b20" href="#tab4" data-bs-toggle="tab">
                                <div class="icon-md site-text-primary radius">
                                    <span class="icon-cell  site-text-primary"><img src="/assets/frontend/images/icon/bathtub.png" alt=""></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase">Steam Bath</h4>
                                    <p>A wonderful serenity has taken possession of my entire soul.</p>
                                </div>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link wt-icon-box-wraper left p-a10 m-l30 m-b20" href="#tab5" data-bs-toggle="tab">
                                <div class="icon-md site-text-primary radius">
                                    <span class="icon-cell  site-text-primary"><img src="/assets/frontend/images/icon/jacuzzi.png" alt=""></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase">Trained Professionals</h4>
                                    <p>A wonderful serenity has taken possession of my entire.</p>
                                </div>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link wt-icon-box-wraper left p-a10 m-b20" href="#tab6" data-bs-toggle="tab">
                                <div class="icon-md site-text-primary radius">
                                    <span class="icon-cell  site-text-primary"><img src="/assets/frontend/images/icon/massage.png" alt=""></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase">Complete Detoxification</h4>
                                    <p>A wonderful serenity has taken possession of my entire soul.</p>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- WELCOME COMPANY SECTION END -->

    <!-- OUR PRODUCT SECTION START  -->
    <div class="section-full bg-white p-t100 p-b70 bg-bottom-right bg-no-repeat" style="background-image:url(/assets/frontend/images/stone-spa.png)">
        <div class="container">
            <!-- TITLE START-->
            <div class="section-head text-center">
                <h2><span class="site-text-primary">Our</span> Products</h2>
                <div class="wt-separator-outer ">
                    <div class="wt-separator style-icon">
                        <i class="fa fa-leaf text-black"></i>
                        <span class="separator-left site-bg-primary"></span>
                        <span class="separator-right site-bg-primary"></span>
                    </div>
                </div>
                <p>{{ config('misc.content.products_headline') }}</p>
            </div>
            <!-- TITLE END-->
            <div class="section-content">
                <div class="row">

                    @foreach($products as $product)
                        <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                            <div class="wt-box bg-white wt-product-box">
                                <div class="wt-media site-text-primary">
                                    <img style="height: 250px" width="100%" src="{{ url('/uploads/products/'.$product->image) }}"  alt="{{ $product->name }}">
                                </div>
                                <div class="wt-info p-a20 text-center">
                                    <h6>{{ $product->name }}</h6>
                                    <span class="price">
                                    <del>
                                         <span><span class="Price-currencySymbol">tk.</span>{{ $product->price + $product->discount }}</span>
                                    </del>
                                    <ins>
                                        <span><span class="Price-currencySymbol">tk.</span>{{ $product->price }}</span>
                                    </ins>
                                </span>
                                    {{--                                <div class="rating-bx">--}}
                                    {{--                                    <i class="fa fa-star"></i>--}}
                                    {{--                                    <i class="fa fa-star"></i>--}}
                                    {{--                                    <i class="fa fa-star"></i>--}}
                                    {{--                                    <i class="fa fa-star"></i>--}}
                                    {{--                                    <i class="fa fa-star"></i>--}}
                                    {{--                                </div>--}}
                                    <div class="p-t10">
                                        <a href="{{ route('products.details',$product->id) }}" class="site-button text-uppercase radius-sm font-weight-700 button-md">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- OUR PRODUCT SECTION END  -->

{{--    <!-- OUR SPECIAL OFFER SECTION start  -->--}}
{{--    <div class="section-full  special-offer-block2 overlay-wrapper bg-repeat p-t100 p-b70"  style="background-image:url(/assets/frontend/images/background/bg-6.jpg);">--}}
{{--        <div class="overlay-main bg-white opacity-01"></div>--}}
{{--        <div class="left-larg-pic">--}}
{{--            <div class="wt-media">--}}
{{--                <img src="/assets/frontend/images/stone_flower2.png" alt="">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3 col-sm-3">--}}

{{--                </div>--}}
{{--                <div class="col-md-9 col-sm-9 m-b30">--}}
{{--                    <div class="awesome-counter text-right">--}}
{{--                        <h3 class="font-24 text-secondry">You Owe Yourself This Moment</h3>--}}
{{--                        <h2 class="font-60 font-weight-600"><span class="site-text-primary">Our Special Offer </span></h2>--}}
{{--                        <p>{{ config('misc.content.special_offer_headline') }}</p>--}}
{{--                    </div>--}}
{{--                    <div class="pull-right counter-small-1">--}}
{{--                        <ul class="list-inline">--}}
{{--                            <li>--}}
{{--                                <div class="wt-icon-box-wraper left p-a10 text-secondry">--}}
{{--                                            <span class="icon-sm">--}}
{{--                                                <span class="flaticon-happy"></span>--}}
{{--                                            </span>--}}
{{--                                    <div class="icon-content">--}}
{{--                                        <div class="font-20 font-weight-600"><span class="counter">458</span><b>+</b></div>--}}
{{--                                        <span class="text-uppercase">Happy Clients</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <div class="wt-icon-box-wraper left p-a10 text-secondry">--}}
{{--                                            <span class="icon-sm">--}}
{{--                                                <span class="flaticon-trophy"></span>--}}
{{--                                            </span>--}}
{{--                                    <div class="icon-content">--}}
{{--                                        <div class="font-20 font-weight-600"><span class="counter">698</span><b>+</b></div>--}}
{{--                                        <span class="text-uppercase">Win Awards</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <div class="wt-icon-box-wraper left p-a10 text-secondry">--}}
{{--                                            <span class="icon-sm">--}}
{{--                                                <span class="flaticon-female-hairs"></span>--}}
{{--                                            </span>--}}
{{--                                    <div class="icon-content">--}}
{{--                                        <div class="font-20 font-weight-600"><span class="counter">894</span><b>+</b></div>--}}
{{--                                        <span class="text-uppercase">Our Trainer</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- OUR SPECIAL OFFER SECTION END  -->--}}

{{--    <!-- OUR PRICING TABLE SECTION START  -->--}}
{{--    <div class="section-full  overlay-wrapper bg-white bg-parallax  p-t100 p-b70" data-stellar-background-ratio="0.5" style="background-image:url(/assets/frontend/images/our_special_offer_background.jpg);">--}}
{{--        <div class="overlay-main bg-white opacity-07"></div>--}}
{{--        <div class="container">--}}
{{--            <div class="section-content">--}}
{{--                <div class="pricingtable-row">--}}
{{--                    <div class="row">--}}
{{--                        @foreach($specialOffers as $key => $specialOffer)--}}
{{--                        <div class="col-lg-4 col-md-4 m-b30">--}}
{{--                            <div class="pricingtable-wrapper overlay-wrapper  pricing-table-style-3" >--}}
{{--                                <div class="pricingtable-inner bg-no-repeat bg-cover" style="background-image:url({{ url('/uploads/special-offers/'.$specialOffer->image) }});">--}}

{{--                                    <div class="pricingtable-title" style="background-color:#8b4795">--}}
{{--                                        <h3>{{ $specialOffer->name }}</h3>--}}
{{--                                    </div>--}}

{{--                                    <div class="pricingtable-price">--}}
{{--                                        <span class="pricingtable-bx  text-secondry">{{ $specialOffer->price }}</span>--}}
{{--                                        <span class="pricingtable-type text-secondry">tk.</span>--}}
{{--                                    </div>--}}

{{--                                    <ul class="pricingtable-features  text-white">--}}
{{--                                        <li><i class="fa fa-check"></i>  Phone & Email Support  </li>--}}
{{--                                        <li><i class="fa fa-check"></i> 3 Social Account </li>--}}
{{--                                        <li><i class="fa fa-check"></i> Branded Reports  </li>--}}
{{--                                        <li><i class="fa fa-check"></i> Unlock rewards</li>--}}
{{--                                        <li><i class="fa fa-check"></i> Support Forum</li>--}}
{{--                                    </ul>--}}

{{--                                    <div class="pricingtable-footer">--}}
{{--                                        <a href="{{ route('special-offers.index') }}" class="site-button white text-uppercase radius-sm">More</a>--}}
{{--                                    </div>--}}

{{--                                    <div class="overlay-main gradi-purple opacity-07"></div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- OUR PRICING TABLEL SECTION END  -->--}}

    <!-- OUR SPECIAL OFFER SECTION END  -->
    <div class="section-full site-bg-primary">
{{--        <div class="container-fluid bg-top-right bg-no-repeat bg-full-height special-offer-block no-col-gap" style="background-image:url(/assets/frontend/images/special-offer.jpg);">--}}
        <div class="container-fluid bg-top-right bg-no-repeat bg-full-height special-offer-block no-col-gap" style="background-image:url(/assets/frontend/images/our_special_offer.jpg);">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="section-content special-offer-outer site-bg-primary radius  p-tb60">
                        <div class="special-offer radius p-tb60">
                            <div class="wt-left-part special-offer-in">
                                <div class="wt-box p-r100 text-white">
                                    <h1>Our Special Offer</h1>
                                    <h2 class="text-uppercase">You Owe Yourself This Moment</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin squ ad litora torquent per conubia.</p>
                                    <a href="shortcode-pricing-table.html" class="site-button text-uppercase radius-sm font-weight-700 button-lg" >view packages</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="section-content">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- OUR SPECIAL OFFER SECTION END  -->

    <!-- OUR GALLERY SECTION END  -->
    <div class="section-full p-t100">
        <div class="container">
            <!-- TITLE START-->
            <div class="section-head text-center">
                <h1><span class="site-text-primary">Our</span> Gallery</h1>
                <div class="wt-separator-outer ">
                    <div class="wt-separator style-icon">
                        <i class="fa fa-leaf text-black"></i>
                        <span class="separator-left site-bg-primary"></span>
                        <span class="separator-right site-bg-primary"></span>
                    </div>
                </div>
                <p>{{ config('misc.content.gallery_headline') }}</p>
            </div>
            <!-- TITLE END-->

            <!-- PAGINATION START -->
            <div class="filter-wrap p-a15 our-gallery  m-tb30">
                <ul class="masonry-filter link-style  text-uppercase center-block m-t0">
                    <li class="active"><a data-filter="*" href="#">All</a></li>
                    @foreach($galleryCategories as $key => $galleryCategory)
                        <li><a data-filter=".gallery_category_{{ $galleryCategory->id }}" href="#">{{ $galleryCategory->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <!-- PAGINATION END -->

        </div>
        <!-- GALLERY CONTENT START -->
        <div class="portfolio-wrap mfp-gallery no-col-gap clearfix">
            <div class="container-fluid">
                <div class="row">
                    <!-- COLUMNS 1 -->
                    @foreach($gallery as $key => $galleryImage)
                    <div class="masonry-item gallery_category_{{ $galleryImage->category_id }} col-xl-3 col-lg-6 col-md-6">
                        <div class="flip-container">
                            <div class="wt-box">
                                <div class="wt-thum-bx">
                                    <img style="width: 100%; height: 375px;" src="@if(isset($galleryImage->image)) {{ url('/uploads/gallery/'.$galleryImage->image) }} @else /assets/frontend/images/gallery/pic1.jpg @endif" alt="">
                                </div>
                                <div class="wt-info bg-white text-center bdr-5 bdr-primary">
                                    <div class="wt-info-media-zoom">
                                        <a href="@if(isset($galleryImage->image)) {{ url('/uploads/gallery/'.$galleryImage->image) }} @else /assets/frontend/images/latest-projects/large/pic1.jpg @endif"  class="mfp-link">
                                            <i class="fa fa-arrows-alt font-24 p-a10"></i>
                                        </a>
                                    </div>
                                    <div class="wt-info-text p-a30">
                                        <h3>{{ $galleryImage->title }}</h3>
                                        <p>{{ $galleryImage->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- GALLERY CONTENT END -->
    </div>
    <!-- OUR GALLERY CONTENT END  -->

    <!-- OUR EXPERTS SECTION START  -->
    <div class="section-full bg-white p-t100 p-b70">
        <div class="container">
            <!-- TITLE START-->
            <div class="section-head text-center">
                <h2><span class="site-text-primary">Our</span> Experts</h2>
                <div class="wt-separator-outer ">
                    <div class="wt-separator style-icon">
                        <i class="fa fa-leaf text-black"></i>
                        <span class="separator-left site-bg-primary"></span>
                        <span class="separator-right site-bg-primary"></span>
                    </div>
                </div>
                <p>{{ config('misc.content.our_experts_headline') }}</p>
            </div>
            <!-- TITLE END-->
            <div class="section-content wt-our-team">
                <div class="row">

                    @foreach($doctors as $key => $doctor)
                        <div class="col-lg-3 col-md-3 m-b30">
                            <div class="wt-team-one bg-white">
                                <div class="wt-team-media">
                                    <a href="#"><img style="width: 100%; height: 300px" src="@if(isset($doctor->photo)) {{ url('/uploads/users/'.$doctor->photo) }} @else /assets/frontend/images/our-team4/ex1.jpg @endif" alt="{{ $doctor->name }}"></a>
                                </div>
                                <div class="wt-team-info text-center bg-white p-a10">
                                    <h4 class="wt-team-title"><a href="#">{{ $doctor->name }}</a></h4>
                                    <p>{{ $doctor->designation }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- OUR EXPERTS SECTION END  -->

    <!-- CONTACT US SECTION END  -->
    <div class="section-full overlay-wrapper bg-parallax" data-stellar-background-ratio="0.2" style="background-image:url(/assets/frontend/images/opening_hours_background.jpg);">
        <div class="overlay-main bg-white opacity-07"></div>
        <div class="container">

            <div class="row conntact-home">
                <div class="col-lg-5 col-md-5 contact-home4-left">
                    <div class="section-content p-tb30 overlay-wrapper">
                        <div class="overlay-main site-bg-primary opacity-09"></div>
                        <div class="p-a30" style="z-index:1; position:relative">
                            <h3 class="font-weight-400 text-white m-b5">Make an</h3>
                            <h2 class="text-white m-t0"  style="font-family: 'Crete Round', serif;"><i>Appointment</i></h2>
                            <form  class="cons-contact-form2 form-transparent" method="post" action="form-handler2.php">
                                <div class="form-group">
                                    <input name="username" type="text" required class="form-control" placeholder="Neme">
                                </div>
                                <div class="form-group">
                                    <input name="email" type="text" class="form-control" required placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input name="phone" type="text" class="form-control" required placeholder="Phone">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="4" placeholder="Message"></textarea>
                                </div>
                                <button type="submit" class="site-button-secondry radius-sm">
                                    <span class="font-weight-700 inline-block text-uppercase p-lr15">Submit</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 contact-home4-right p-t50 p-b50" >
                    <div class="section-content">
                        <div class="opening-block bdr-5 bdr-primary p-a40 text-right">
                            <a href="{{ route('services.index') }}" class="site-bg-primary book-now-btn p-tb5 p-lr15 text-uppercase font-16 font-weight-500">All Services</a>
                            <h2 class="text-uppercase  text-secondry m-tb0">Best Services</h2>
                            <span class="font-60 font-weight-600 text-uppercase site-text-primary">Open Hours</span>
                            <p>If you feel tired and stressed after a working day, we are happy to give you an enjoyable and healthy solution to find your balance again.</p>
                            <div class="clearfix">
                                <ul class="list-unstyled m-b0">
                                    <li><div class="clearfix"><span class="opening-date">Mon-Fri:</span><span class="opening-time">9 AM - 6 PM</span></div></li>
                                    <li><div class="clearfix"><span class="opening-date">Saturday:</span> <span class="opening-time">9 AM- 6 PM</span></div></li>
                                    <li><div class="clearfix"><span class="opening-date">Sunday:</span> <span class="opening-time">Closed</span></div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- CONTACT US OFFER SECTION END  -->

    <!-- LATEST BLOG SECTION START -->
{{--    <div class="section-full latest-blog bg-gray p-t100 p-b70">--}}
{{--        <div class="container">--}}
{{--            <!-- TITLE -->--}}
{{--            <div class="section-head text-center">--}}
{{--                <h2><span class="site-text-primary">Latest </span> News</h2>--}}
{{--                <div class="wt-separator-outer ">--}}
{{--                    <div class="wt-separator style-icon">--}}
{{--                        <i class="fa fa-leaf text-black"></i>--}}
{{--                        <span class="separator-left site-bg-primary"></span>--}}
{{--                        <span class="separator-right site-bg-primary"></span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi hendrerit elit turpis, a porttitor tellus sollicitudin at. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>--}}
{{--            </div>--}}

{{--            <!-- TITLE -->--}}

{{--            <div class="section-content ">--}}
{{--                <div class="row equal-wraper">--}}
{{--                    <!-- COLUMNS 1 -->--}}
{{--                    <div class="col-lg-6 col-md-12 m-b30">--}}

{{--                        <div class="blog-post latest-blog-3 blog-md date-style-1 clearfix">--}}
{{--                            <div class="wt-post-media wt-img-effect zoom-slow">--}}
{{--                                <a href="blog-single-sidebar.html"><img src="/assets/frontend/images/blog/blog-small/pic1.jpg" alt=""></a>--}}
{{--                            </div>--}}
{{--                            <div class="wt-post-info">--}}
{{--                                <div class="wt-post-title ">--}}
{{--                                    <h4 class="post-title font-weight-800"><a href="blog-single-sidebar.html">Oil Massage</a></h4>--}}
{{--                                </div>--}}
{{--                                <div class="wt-post-meta ">--}}
{{--                                    <ul>--}}
{{--                                        <li class="post-date"> <i class="fa fa-calendar"></i><strong>18 Jan</strong> <span> 2018</span> </li>--}}
{{--                                        <li class="post-author"><i class="fa fa-user"></i><a href="blog-single-sidebar.html">By <span>John</span></a> </li>--}}
{{--                                        <li class="post-comment"><i class="fa fa-comments"></i> <a href="blog-single-sidebar.html">0</a> </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="wt-post-text">--}}
{{--                                    <p>Lorem Ipsum is simply dummy text of printing and typesetting Ipsum has been the industry's dummy</p>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="blog-post latest-blog-3 blog-md date-style-1 clearfix">--}}
{{--                            <div class="wt-post-media wt-img-effect zoom-slow">--}}
{{--                                <a href="blog-single-sidebar.html"><img src="/assets/frontend/images/blog/blog-small/pic2.jpg" alt=""></a>--}}
{{--                            </div>--}}
{{--                            <div class="wt-post-info">--}}
{{--                                <div class="wt-post-title ">--}}
{{--                                    <h4 class="post-title font-weight-800"><a href="blog-single-sidebar.html">Beauty Treatment</a></h4>--}}
{{--                                </div>--}}
{{--                                <div class="wt-post-meta ">--}}
{{--                                    <ul>--}}
{{--                                        <li class="post-date"> <i class="fa fa-calendar"></i><strong>20 Jan</strong> <span> 2018</span> </li>--}}
{{--                                        <li class="post-author"><i class="fa fa-user"></i><a href="blog-single-sidebar.html">By <span>John</span></a> </li>--}}
{{--                                        <li class="post-comment"><i class="fa fa-comments"></i> <a href="blog-single-sidebar.html">0</a> </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="wt-post-text">--}}
{{--                                    <p>Lorem Ipsum is simply dummy text of printing and typesetting Ipsum has been the industry's dummy</p>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="blog-post latest-blog-3 blog-md date-style-1 clearfix">--}}
{{--                            <div class="wt-post-media wt-img-effect zoom-slow">--}}
{{--                                <a href="blog-single-sidebar.html"><img src="/assets/frontend/images/blog/blog-small/pic3.jpg" alt=""></a>--}}
{{--                            </div>--}}
{{--                            <div class="wt-post-info">--}}
{{--                                <div class="wt-post-title ">--}}
{{--                                    <h4 class="post-title font-weight-800"><a href="blog-single-sidebar.html">Fairness treatment</a></h4>--}}
{{--                                </div>--}}
{{--                                <div class="wt-post-meta ">--}}
{{--                                    <ul>--}}
{{--                                        <li class="post-date"> <i class="fa fa-calendar"></i><strong>22 Jan</strong> <span> 2018</span> </li>--}}
{{--                                        <li class="post-author"><i class="fa fa-user"></i><a href="blog-single-sidebar.html">By <span>John</span></a> </li>--}}
{{--                                        <li class="post-comment"><i class="fa fa-comments"></i> <a href="blog-single-sidebar.html">0</a> </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="wt-post-text">--}}
{{--                                    <p>Lorem Ipsum is simply dummy text of printing and typesetting Ipsum has been the industry's dummy</p>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="col-lg-6 col-md-12">--}}
{{--                        <div class="blog-post latest-blog-3 overlay-wrapper post-overlay date-style-1 bg-cover bg-no-repeat bg-top-center"  style="background-image:url(/assets/frontend/images/blog-big.jpg);">--}}
{{--                            <div class="overlay-main opacity-08 primary-gradi"></div>--}}
{{--                            <div class="wt-post-info p-a30 text-white">--}}
{{--                                <div class="post-overlay-position">--}}
{{--                                    <div class="wt-post-title ">--}}
{{--                                        <h3 class="post-title"><a href="blog-single-sidebar.html" class="text-white text-capitalize">Relaxation. No longer beyond your budget. </a></h3>--}}
{{--                                    </div>--}}
{{--                                    <div class="wt-post-meta ">--}}
{{--                                        <ul>--}}
{{--                                            <li class="post-date"><i class="fa fa-calendar"></i><strong>6 Jan</strong> <span> 2018</span></li>--}}
{{--                                            <li class="post-author"><i class="fa fa-user"></i>By <a href="blog-single-sidebar.html">Admin</a> </li>--}}
{{--                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="blog-single-sidebar.html">2 comment</a> </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <div class="wt-post-text">--}}
{{--                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- LATEST BLOG SECTION END -->

    <!-- OUR TESTIMONIAL SECTION START  -->
    <div class="section-full bg-gray bg-repeat p-t100 p-b70" style="background-image:url(images/background/bg-6.jpg);">
        <div class="container">
            <!-- TITLE START-->
            <div class="section-head text-center">
                <h1><span class="site-text-primary">What</span> People Say</h1>
                <div class="wt-separator-outer ">
                    <div class="wt-separator style-icon">
                        <i class="fa fa-leaf text-black"></i>
                        <span class="separator-left site-bg-primary"></span>
                        <span class="separator-right site-bg-primary"></span>
                    </div>
                </div>
                <p>{{ config('misc.content.testimonial_headline') }}</p>
            </div>
            <!-- TITLE END-->
            <div class="section-content">
                <div class="owl-carousel home-carousel-1 m-b30">
                    @foreach($testimonials as $key => $testimonial)
                    <div class="item">
                        <div class="testimonial-5 bg-white radius-sm">
                            <div class="testimonial-pic-block radius-bx">
                                <div class="testimonial-pic radius">
                                    <img src="@if(isset($testimonial->image)) {{ url('/uploads/testimonials/'.$testimonial->image) }} @else /assets/frontend/images/testimonials/pic1.jpg @endif" width="132" height="132" alt="{{ $testimonial->name }}">
                                </div>
                            </div>
                            <div class="testimonial-text clearfix">
                                <div class="testimonial-paragraph">
                                    <span class="fa fa-quote-left site-text-primary"></span>
                                    <p>{{ $testimonial->message }}</p>
                                </div>
                                <div class="testimonial-detail clearfix">
                                    <strong class="testimonial-name">{{ $testimonial->name }}</strong>
                                    <span class="testimonial-position site-text-primary p-t10">{{ $testimonial->designation }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- OUR TESTIMONIAL SECTION END  -->

    <!-- OUR CLIENT SLIDER START -->
{{--    <div class="section-full p-t100 p-b70 bg-repeat" style="background-image:url(/assets/frontend/images/background/bg-6.jpg);">--}}
{{--        <div class="container">--}}

{{--            <!-- TITLE START -->--}}
{{--            <div class="section-head text-center">--}}
{{--                <h1><span class="site-text-primary"> Our</span> Client</h1>--}}
{{--                <div class="wt-separator-outer ">--}}
{{--                    <div class="wt-separator style-icon">--}}
{{--                        <i class="fa fa-leaf text-black"></i>--}}
{{--                        <span class="separator-left site-bg-primary"></span>--}}
{{--                        <span class="separator-right site-bg-primary"></span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <p>{{ config('misc.content.client_headline') }}</p>--}}
{{--            </div>--}}
{{--            <!-- TITLE END -->--}}

{{--            <!-- IMAGE CAROUSEL START -->--}}
{{--            <div class="section-content">--}}
{{--                <div class="owl-carousel client-logo-carousel m-b30">--}}
{{--                    @foreach($clients as $key => $client)--}}
{{--                    <div class="item">--}}
{{--                        <div class="ow-client-logo">--}}
{{--                            <div class="client-logo wt-img-effect on-color">--}}
{{--                                <a href="{{ $client->website }}"><img src="{{ url('/uploads/clients/'.$client->image) }}" alt="{{ $client->name }}"></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- IMAGE CAROUSEL START -->--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- OUR CLIENT SLIDER END -->
@endsection
