<!-- FOOTER START -->
<footer class="site-footer footer-light">
    <!-- FOOTER BLOCKES START -->
    <div class="footer-top overlay-wrapper">
        <div class="overlay-main"></div>
        <div class="container">
            <div class="row">
                <!-- ABOUT COMPANY -->
                <div class="col-lg-4 col-md-6">
                    <div class="widget widget_about">
                        <h4 class="widget-title">About Company</h4>
                        <div class="logo-footer clearfix p-b15">
                            <a href="index.html"><img src="{{ isset($siteConfiguration->logo) ? url('/uploads/appearance/'.$siteConfiguration->logo) : '/assets/frontend/images/logo-7.png' }}" width="230" height="67" alt="{{ $siteConfiguration->name ?? null }}"></a>
                        </div>
                        <p>
                            {!! $siteConfiguration->description ?? null !!}
                        </p>
                    </div>
                </div>
                <!-- USEFUL LINKS -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="widget widget_services">
                        <h4 class="widget-title">Useful links</h4>
                        <ul>
                            <li><a href="{{ route('about-us.index') }}">About</a></li>
                            <li><a href="{{ route('contact.index') }}">Contact</a></li>
                            <li><a href="{{ route('services.index') }}">Services</a></li>
                            <li><a href="{{ route('products.index') }}">Products</a></li>
{{--                            <li><a href="services.html">Services</a></li>--}}
{{--                            <li><a href="gallery-grid-1.html">Gallery</a></li>--}}
                        </ul>
                    </div>
                </div>
                <!-- NEWSLETTER -->
                <div class="col-lg-4 col-md-6">
                    <div class="widget widget_newsletter">
                        <h4 class="widget-title">Newsletter</h4>
                        <div class="newsletter-bx">
                            <form role="search" method="post">
                                <div class="input-group">
                                    <input name="news-letter" class="form-control" placeholder="ENTER YOUR EMAIL" type="text">
                                    <span class="input-group-btn">
                                            <button type="submit" class="site-button"><i class="fa fa-paper-plane-o"></i></button>
                                        </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- SOCIAL LINKS -->
                    <div class="widget widget_social_inks">
                        <h4 class="widget-title">Social Links</h4>
                        <ul class="social-icons social-square social-darkest">
                            <li><a href="{{ $siteConfiguration->facebook ?? '#' }}" class="fa fa-facebook"></a></li>
                            <li><a href="{{ $siteConfiguration->twitter ?? '#' }}" class="fa fa-twitter"></a></li>
                            <li><a href="{{ $siteConfiguration->linkedin ?? '#' }}" class="fa fa-linkedin"></a></li>
                            <li><a href="{{ $siteConfiguration->google_plus ?? '#' }}" class="fa fa-rss"></a></li>
                            <li><a href="{{ $siteConfiguration->youtube ?? '#' }}" class="fa fa-youtube"></a></li>
                            <li><a href="{{ $siteConfiguration->instagram ?? '#' }}" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FOOTER COPYRIGHT -->
    <div class="footer-bottom overlay-wrapper">
        <div class="overlay-main"></div>
        <div class="constrot-strip"></div>
        <div class="container p-t30">
            <div class="row ftr-btm">
                <div class="wt-footer-bot-left">
                    <span class="copyrights-text">© 2023 <a target="_blank" href="https://www.coderstationltd.com">Coder Station Ltd</a>. All Rights Reserved.</span>
                </div>
                <div class="wt-footer-bot-right">
                    <ul class="copyrights-nav pull-right">
                        <li><a href="javascript:void(0);">Terms  & Condition</a></li>
                        <li><a href="javascript:void(0);">Privacy Policy</a></li>
                        <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER END -->


<!-- BUTTON TOP START -->
<button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>
