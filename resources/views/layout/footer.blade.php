@php
    use App\Helpers\MenuHelper;
    $menuItems = MenuHelper::getMenuItems();
@endphp

<footer id="footer" class="footer_area">
    <div class="container">
        <div class="footer_widget pt-70 pb-120">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="footer_about mt-50">
                        <div class="footer_logo">
                            <a href="#"><img src="{{ asset('assets/images/logo-white.png') }}" alt="logo"
                                    width="250px"></a>
                        </div>
                        <div class="footer_content">
                            <p>We are a multidisciplinary media agency specializing in creative, digital, and print
                                solutions that build memorable brand identities</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="footer_link_wrapper d-flex flex-wrap">
                        <div class="footer_link mt-50">
                            <h2 class="footer_title">Quick Links</h2>
                            <ul class="link">
                                @foreach ($menuItems as $item)
                                    @if ($item['name'] !== 'Home')
                                        {{-- Hide Home --}}
                                        <li>
                                            <a href="{{ $item['route'] }}">
                                                {{ $item['name'] }}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="footer_link mt-50">
                            <h2 class="footer_title">Services</h2>
                            <ul class="link">
                                <li><a href="{{ route('services') }}">Brand & Identity Design</a></li>
                                <li><a href="{{ route('services') }}">Graphic Design</a></li>
                                <li><a href="{{ route('services') }}">Advertising Solutions</a></li>
                                <li><a href="{{ route('services') }}">Promotion</a></li>
                                <li><a href="{{ route('services') }}">Printing & Production</a></li>
                                <li><a href="{{ route('services') }}">Digital Marketing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer_subscribe mt-50">
                        <h2 class="footer_title">Social Links</h2>
                        <div class="footer_social">
                            <ul class="social">
                                <li><a href="{{ route('contact') }}"><i class="lni lni-facebook-filled"></i></a>
                                </li>
                                <li><a href="{{ route('contact') }}"><i class="lni lni-instagram-original"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/scrolling-nav.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/main.js"></script>

</body>

</html>
