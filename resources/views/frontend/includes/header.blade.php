<!-- Search Form -->
<div class="sticky-header main-bar-wrapper">
    <div class="main-bar header-bottom nav-bg-secondary">
        <div class="container">
            <!-- NAV Toggle Button -->
            <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar icon-bar-first"></span>
                <span class="icon-bar icon-bar-two"></span>
                <span class="icon-bar icon-bar-three"></span>
            </button>

            <!-- MAIN Nav -->
            <div class="header-nav navbar-collapse collapse">
                <ul class="nav navbar-nav" style="margin:0 auto">
                    @if(auth()->user())
                    <li class="{{ (request()->is(['/admin/dashboard'])) ? 'active' : '' }}"><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
                    @endif
                    <li class="{{ (request()->is(['/'])) ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                    <li class="{{ (request()->is(['products*'])) ? 'active' : '' }}"><a href="{{ url('/products') }}">Products</a></li>
                    <li class="{{ (request()->is(['services*'])) ? 'active' : '' }}"><a href="{{ url('/services') }}">Services</a></li>
                    <li class="{{ (request()->is(['special-offers*'])) ? 'active' : '' }}"><a href="{{ url('/special-offers') }}">Special Offers</a></li>
                    <li class="{{ (request()->is(['about-us*'])) ? 'active' : '' }}"><a href="{{ url('/about-us') }}">About Us</a></li>
                    <li class="{{ (request()->is(['contact*'])) ? 'active' : '' }}"><a href="{{ url('/contact') }}">Contact Us</a></li>
                </ul>
            </div>
            @php
                $cartProducts = session()->get("cart.products") ?? [];
                $cartProductsCount = count($cartProducts);
                $cartSubTotal = 0
            @endphp

            <div class="extra-nav">

                <a href="javascript:;" class="wt-cart cart-btn dropdown-toggle" title="Your Cart" id="ID-MSG_dropdown" data-bs-toggle="dropdown">
                    <span class="link-inner">
                        <span class="woo-cart-total"> </span>
                        <span class="woo-cart-count">
                            <span class="shopping-bag wcmenucart-count ">
                                {{ $cartProductsCount }}
                            </span>
                        </span>
                    </span>
                </a>
                @if(count($cartProducts) > 0)
                <div class="dropdown-menu cart-dropdown-item-wraper">
                    <div class="nav-cart-content">

                        <div class="nav-cart-items p-a15">
                            @foreach($cartProducts as $cartProduct)
                            @php
                                $cartTotal = $cartProduct['quantity'] * ($cartProduct['price']-$cartProduct['discount']);
                                $cartSubTotal += $cartTotal;
                            @endphp
                            <div class="nav-cart-item clearfix">
                                <div class="nav-cart-item-image">
                                    <a href="{{ route('products.details',$cartProduct['product_id']) }}">
                                        <img style="width: 44px; height: 44px;" src="@if(isset($cartProduct['image'])) {{ url('/uploads/products/'.$cartProduct['image']) }} @else /assets/frontend/images/cart/pic-1.jpg @endif" alt="{{ $cartProduct['name'] ?? null }}">
                                    </a>
                                </div>
                                <div class="nav-cart-item-desc">
                                    <a href="#">{{ $cartProduct['name'] ?? null }}</a>
                                    <span class="nav-cart-item-price"><strong>{{ $cartProduct['quantity'] ?? null }}</strong> x {{ $cartProduct['price'] - $cartProduct['discount'] }}</span>
                                    <a href="{{ route('products.remove-cart',$cartProduct['product_id']) }}" class="nav-cart-item-quantity">x</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="nav-cart-title p-tb10 p-lr15 clearfix">
                            <h4  class="pull-left m-a0">Subtotal:</h4>
                            <h5 class="pull-right m-a0">{{ $cartSubTotal }}</h5>
                        </div>
                        <div class="nav-cart-action p-a15 clearfix">
                            <a href="{{ route('products.view-cart') }}" class="site-button  btn-block m-b15 " type="button">View Cart</a>
                            <a href="{{ route('products.checkout-cart') }}" class="site-button  btn-block" type="button">Checkout </a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            <div id="search">
                <span class="close"></span>
                <form role="search" id="searchform" action="/search" method="get" class="radius-xl">
                    <div class="input-group">
                        <input value="" name="q" type="search" placeholder="Type to search">
                        <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search"></i></button></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
