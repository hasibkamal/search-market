@extends('frontend.layouts.app')
@section('content')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wrapper" style="background-image:url(/assets/frontend/images/banner/product-banner.jpg);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
{{--                <h1 class="text-white">Product Details</h1>--}}
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

            <div class="row m-b30">

                <div class="col-lg-4 col-md-8 m-b30">
                    <div class="wt-box wt-product-gallery">
                        <div class="mfp-gallery">
                            <div class="wt-box">
                                <img style="width: 100%; height: 350px;" src="{{ url('/uploads/products/'.$product->image) }}" alt="{{ $product->name }}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="wt-post-title ">
                        <h3 class="post-title"><a href="javascript:void(0);">{{ $product->name }}</a></h3>
                    </div>
                    <h3 class="m-tb10">tk. {{ $product->price }} </h3>
                    <div class="wt-post-text">
                        <p class="m-b10">{{ $product->description }}</p>
                    </div>
                    <table class="table table-bordered" >
                        <tr>
                            <td>Pricing</td>
                            <td>{{ $product->price }}</td>
                        </tr>
                        <tr>
                            <td>Stock Availability</td>
                            <td>AVAILABLE</td>
                        </tr>
{{--                        <tr>--}}
{{--                            <td>Rating</td>--}}
{{--                            <td>--}}
{{--                                <span class="rating-bx">--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star"></i>--}}
{{--                                    <i class="fa fa-star-o"></i>--}}
{{--                                    <i class="fa fa-star-o"></i>--}}
{{--                                </span>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
                    </table>
                    {!! Form::open(['route'=>'products.add-cart', 'method'=>'post','enctype'=>'multipart/form-data','class'=>'cart']) !!}
                        {!! Form::hidden('product_id',$product->id) !!}
                        {!! Form::hidden('name',$product->name) !!}
                        {!! Form::hidden('image',$product->image) !!}
                        {!! Form::hidden('price',$product->price) !!}
                        {!! Form::hidden('discount',$product->discount) !!}
                        <div class="quantity btn-quantity pull-left m-r10">
                            {!! Form::number('quantity',1,['min'=>1,'class'=>'form-control']) !!}
                        </div>
                        <button type="submit" class="btn btn-primary site-button pull-left"><i class="fa fa-cart-plus"></i> ADD TO CART</button>
                    {!! Form::close() !!}
                </div>

            </div>

            <!-- TITLE START -->
            <div class="p-b10">
                <h3 class="text-uppercase">Related products</h3>
                <div class="wt-separator-outer  m-b30">
                    <div class="wt-separator style-icon">
                        <i class="fa fa-leaf text-black"></i>
                        <span class="separator-left site-bg-primary"></span>
                        <span class="separator-right site-bg-primary"></span>
                    </div>
                </div>
            </div>
            <!-- TITLE END -->

            <div class="row m-b30">

                <!-- COLUMNS 1 -->
                @foreach($relatedProducts as $relatedProduct)
                <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                    <div class="wt-box wt-product-box">
                        <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                            <img style="width: 100%; height: 250px;" src="{{ url('/uploads/products/'.$relatedProduct->image) }}" alt="{{ $relatedProduct->name }}">
                            <div class="overlay-bx">
                                <div class="overlay-icon">
                                    <a href="{{ route('products.details',$relatedProduct->id) }}">
                                        <i class="fa fa-cart-plus wt-icon-box-xs"></i>
                                    </a>
                                    <a class="mfp-link" href="{{ route('products.details',$relatedProduct->id) }}">
                                        <i class="fa fa-eye wt-icon-box-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="wt-info  text-center">
                            <div class="p-a10 bg-white">
                                <h5 class="wt-title">
                                    <a href="javascript:;">{{ generateExcerpt($relatedProduct->name,30) }}</a>
                                </h5>
                                <span class="price">
                                    <del>
                                         <span><span class="Price-currencySymbol">tk.</span>{{ $relatedProduct->price + $relatedProduct->discount }}</span>
                                    </del>
                                    <ins>
                                        <span><span class="Price-currencySymbol">tk.</span>{{ $relatedProduct->price }}</span>
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
                                    <a href="{{ route('products.details',$relatedProduct->id) }}" class="site-button  m-r15" >ADD TO CART  <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

{{--            <!-- TABS CONTENT START -->--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12 p-b30">--}}
{{--                    <div class="wt-tabs border border-top bg-tabs">--}}
{{--                        <ul class="nav nav-tabs">--}}
{{--                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#web-design-19">Description</a></li>--}}
{{--                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#graphic-design-19">Specification</a></li>--}}
{{--                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#developement-19">Review</a></li>--}}
{{--                        </ul>--}}
{{--                        <div class="tab-content">--}}
{{--                            <div id="web-design-19" class="tab-pane active">--}}
{{--                                <div class=" p-a10">--}}
{{--                                    <p class="m-b10"><strong><em>Web design lorem ipsum dolor sit amet, consectetuer adipiscing elit.</em></strong><br> Suspendisse et justo.--}}
{{--                                        Praesent mattis commyolk augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet.--}}
{{--                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis--}}
{{--                                        commyolk augue aliquam ornare augue.</p>--}}
{{--                                    <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"</p>--}}
{{--                                    <ul class="list-check-circle primary">--}}
{{--                                        <li>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and </li>--}}
{{--                                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </li>--}}
{{--                                        <li>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'</li>--}}
{{--                                        <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</li>--}}
{{--                                        <li>Dorem ipsum dolor sit amet</li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div id="graphic-design-19" class="tab-pane">--}}
{{--                                <table class="table table-bordered table-striped m-b0" >--}}
{{--                                    <tr>--}}
{{--                                        <td><strong>Size</strong></td>--}}
{{--                                        <td>Small, Medium, Large & Extra Large</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td><strong>Color</strong></td>--}}
{{--                                        <td>Read, Blue, Green & Black</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td><strong>Length</strong></td>--}}
{{--                                        <td>35 cm</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td><strong>Fabric</strong></td>--}}
{{--                                        <td>Cotton, Silk & Synthetic</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>table-bordered</td>--}}
{{--                                        <td>6 Months</td>--}}
{{--                                    </tr>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                            <div id="developement-19" class="tab-pane">--}}
{{--                                <div class=" p-a10">--}}
{{--                                    <div id="comments">--}}
{{--                                        <ol class="commentlist">--}}
{{--                                            <li class="comment">--}}
{{--                                                <div class="comment_container">--}}
{{--                                                    <img class="avatar avatar-60 photo" src="/assets/frontend/images/testimonials/pic1.jpg" alt="">--}}
{{--                                                    <div class="comment-text">--}}
{{--                                                        <div  class="star-rating">--}}
{{--                                                            <div data-rating='3'>--}}
{{--                                                                <i class="fa fa-star" data-alt="1" title="regular"></i>--}}
{{--                                                                <i class="fa fa-star" data-alt="2" title="regular"></i>--}}
{{--                                                                <i class="fa fa-star-o" data-alt="3" title="regular"></i>--}}
{{--                                                                <i class="fa fa-star-o" data-alt="4" title="regular"></i>--}}
{{--                                                                <i class="fa fa-star-o" data-alt="5" title="regular"></i>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="meta">--}}
{{--                                                            <strong class="author">Cobus Bester</strong>--}}
{{--                                                            <span><i class="fa fa-clock-o"></i> March 7, 2022</span>--}}
{{--                                                        </p>--}}
{{--                                                        <div class="description">--}}
{{--                                                            <p>Really happy with this print. The colors are great, and the paper quality is very good.</p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                            <li class="comment">--}}
{{--                                                <div class="comment_container">--}}
{{--                                                    <img class="avatar avatar-60 photo" src="/assets/frontend/images/testimonials/pic2.jpg" alt="">--}}
{{--                                                    <div class="comment-text">--}}
{{--                                                        <div  class="star-rating">--}}
{{--                                                            <div data-rating='3'>--}}
{{--                                                                <i class="fa fa-star" data-alt="1" title="regular"></i>--}}
{{--                                                                <i class="fa fa-star" data-alt="2" title="regular"></i>--}}
{{--                                                                <i class="fa fa-star" data-alt="3" title="regular"></i>--}}
{{--                                                                <i class="fa fa-star-o" data-alt="4" title="regular"></i>--}}
{{--                                                                <i class="fa fa-star-o" data-alt="5" title="regular"></i>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="meta">--}}
{{--                                                            <strong class="author">Cobus Bester</strong>--}}
{{--                                                            <span><i class="fa fa-clock-o"></i> March 7, 2022</span>--}}
{{--                                                        </p>--}}
{{--                                                        <div class="description">--}}
{{--                                                            <p>Really happy with this print. The colors are great, and the paper quality is very good.</p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                            <li class="comment">--}}
{{--                                                <div class="comment_container">--}}
{{--                                                    <img class="avatar avatar-60 photo" src="/assets/frontend/images/testimonials/pic3.jpg" alt="">--}}
{{--                                                    <div class="comment-text">--}}
{{--                                                        <div  class="star-rating">--}}
{{--                                                            <div data-rating='3'>--}}
{{--                                                                <i class="fa fa-star" data-alt="1" title="regular"></i>--}}
{{--                                                                <i class="fa fa-star" data-alt="2" title="regular"></i>--}}
{{--                                                                <i class="fa fa-star" data-alt="3" title="regular"></i>--}}
{{--                                                                <i class="fa fa-star" data-alt="4" title="regular"></i>--}}
{{--                                                                <i class="fa fa-star-o" data-alt="5" title="regular"></i>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="meta">--}}
{{--                                                            <strong class="author">Cobus Bester</strong>--}}
{{--                                                            <span><i class="fa fa-clock-o"></i> March 7, 2022</span>--}}
{{--                                                        </p>--}}
{{--                                                        <div class="description">--}}
{{--                                                            <p>Really happy with this print. The colors are great, and the paper quality is very good.</p>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
{{--                                        </ol>--}}
{{--                                    </div>--}}
{{--                                    <div id="review_form_wrapper">--}}
{{--                                        <div id="review_form">--}}
{{--                                            <div id="respond" class="comment-respond">--}}
{{--                                                <h3 class="comment-reply-title" id="reply-title">Add a review</h3>--}}
{{--                                                <form class="comment-form" method="post" >--}}
{{--                                                    <div class="comment-form-author">--}}
{{--                                                        <label>Name <span class="required">*</span></label>--}}
{{--                                                        <input type="text" aria-required="true" size="30" value="" name="author" id="author">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="comment-form-email">--}}
{{--                                                        <label>Email <span class="required">*</span></label>--}}
{{--                                                        <input type="text" aria-required="true" size="30" value="" name="email" id="email">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="comment-form-rating">--}}
{{--                                                        <label>Your Rating</label>--}}
{{--                                                        <div class='star-Rating-input'>--}}
{{--                                                            <i class="fa fa-star"></i>--}}
{{--                                                            <i class="fa fa-star"></i>--}}
{{--                                                            <i class="fa fa-star"></i>--}}
{{--                                                            <i class="fa fa-star-o"></i>--}}
{{--                                                            <i class="fa fa-star-o"></i>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="comment-form-comment">--}}
{{--                                                        <label>Your Review</label>--}}
{{--                                                        <textarea aria-required="true" rows="8" cols="45" name="comment" id="comment"></textarea>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="form-submit">--}}
{{--                                                        <button class="site-button  m-r15" type="submit">Submit <i class="fa fa-angle-double-right"></i></button>--}}
{{--                                                    </div>--}}
{{--                                                </form>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- TABS CONTENT START -->--}}
        </div>
        <!-- PRODUCT DETAILS -->
    </div>
    <!-- CONTENT CONTENT END -->
@endsection
@section('external-script')

@endsection
