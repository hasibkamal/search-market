<div class="top-bar site-bg-primary">
    <div class="container">

        <div class="wt-topbar-left">
            <ul class="list-unstyled e-p-bx">
                <li><i class="fa fa-envelope"></i>{{ $siteConfiguration->email ?? null }}</li>
                <li><i class="fa fa-phone"></i>{{ $siteConfiguration->phone ?? null }}</li>
            </ul>
        </div>
        <div class="wt-topbar-right">
            <ul class="social-bx list-inline">
                <li><a href="{{ $siteConfiguration->facebook ?? "#" }}" class="fa fa-facebook"></a></li>
                <li><a href="{{ $siteConfiguration->twitter ?? "#" }}" class="fa fa-twitter"></a></li>
                <li><a href="{{ $siteConfiguration->linkedin ?? "#" }}" class="fa fa-linkedin"></a></li>
                <li><a href="{{ $siteConfiguration->google_plus ?? "#" }}" class="fa fa-rss"></a></li>
                <li><a href="{{ $siteConfiguration->pinterest ?? "#" }}" class="fa fa-youtube"></a></li>
                <li><a href="{{ $siteConfiguration->instagram ?? "#" }}" class="fa fa-instagram"></a></li>
            </ul>

        </div>

    </div>
</div>
<!-- Search Link -->

<!-- Search Form -->
<div class="header-middle bg-white">
    <div class="container">
        <div class="logo-header">
            <a href="{{ url('/') }}">
                <img src="{{ isset($siteConfiguration->logo) ? url('/uploads/appearance/'.$siteConfiguration->logo) : '/assets/frontend/images/logo-7.png' }}" width="216" height="37" alt="{{ $siteConfiguration->name ?? null }}">
            </a>
        </div>
        <div class="header-info">
            <ul>
                <li>
                    <div>
                        <div class="icon-sm">
                            <span class="icon-cell  site-text-primary"><i class="flaticon-placeholder"></i></span>
                        </div>
                        <div class="icon-content">
                            <strong>Our Location </strong>
                            <span>{{ $siteConfiguration->address ?? null }}</span>
                        </div>
                    </div>
                </li>
                <li>
                    <div>
                        <div class="icon-sm">
                            <span class="icon-cell  site-text-primary"><i class="flaticon-smartphone"></i></span>
                        </div>
                        <div class="icon-content">
                            <strong>Phone Number</strong>
                            <span>{{ $siteConfiguration->phone ?? null }}</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
