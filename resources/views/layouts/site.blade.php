<?php
use App\Models\Cart;
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Links of CSS files -->
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/rangeSlider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}">

    <title>URBAN INK</title>

    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>
<!-- Start Top Header Area -->

<!-- Start Top Header Area -->
<div class="top-header">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-12">
                <ul class="header-contact-info">
                    <li>Welcome to URBAN INK</li>
                    <li>Call:
                        <a href="tel:{{ business('business_phone_1') }}">
                            {{ business('business_phone_1') }}
                        </a>
                        @if(business('business_phone_2'))
                            {{ ','.' ' }}<a href="tel:{{ business('business_phone_2') }}">
                                {{ business('business_phone_2') }}
                            </a>
                        @endif
                    </li>
                </ul>
            </div>

            <div class="col-lg-6 col-md-12">
                <ul class="header-top-menu">
                    {{-- <li><a href="login.html"><i class='bx bxs-user'></i> My Account</a></li> --}}
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal"><i class='bx bx-heart'></i> Wishlist</a></li>
                    @if (Route::has('login'))
                        @auth('web')
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class='bx bxs-user'></i> Hi, {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ url('/user/profile') }}">Profile</a></li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="dropdown-item">Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li><a href="{{ route('login') }}"><i class='bx bx-log-in'></i> Login</a></li>
                        @endauth
                    @endif
                </ul>

                <ul class="header-top-others-option">
                    <div class="option-item">
                        <div class="search-btn-box">
                            <i class="search-btn bx bx-search-alt"></i>
                        </div>
                    </div>

                    <div class="option-item">
                        <div class="cart-btn">
                            <a href="/cart"><i class='bx bx-shopping-bag'></i><span>@livewire('cart-counter')</span></a>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Top Header Area -->


<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="xton-responsive-nav">
        <div class="container">
            <div class="xton-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="/assets/img/logo.png" class="main-logo" alt="logo" style="width: 100px">
                        <img src="/assets/img/logo.png" class="white-logo" alt="logo" style="width: 100px">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="xton-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="/assets/img/logo.png" class="main-logo" alt="logo" style="width: 100px">
                    <img src="/assets/img/logo.png" class="white-logo" alt="logo" style="width: 100px">
                </a>

                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item "><a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>

                        </li>

                        <li class="nav-item" style="margin-left: 22px"><a href="/about" class="nav-link {{ request()->is('about') ? 'active' : '' }}">About Us </a></li>

                        <li class="nav-item" style="margin-left: 22px"><a href="/products" class="nav-link {{ request()->is('products') ? 'active' : '' }}">Shop </a></li>

                        <li class="nav-item megamenu" style="margin-left: 22px"><a href="#" class="nav-link {{ request()->is('collection') ? 'active' : '' }}">Collection <i class='bx bx-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <div class="container">
                                        <div class="col">
                                            <ul class="megamenu-submenu">
                                                <li>
                                                    <div class="row">


                                                            @foreach($categories as $category)
                                                            <div class="col-md-2 d-flex justify-content-center align-items-center">
                                                            <div class="aside-trending-products">
                                                                @if($category->hasMedia('gallery'))
                                                                    <a href="{{ route('products.index', ['category' => $category->id]) }}">
                                                                        <img src="{{ $category->getFirstMediaURL('gallery', 'thumb') }}" alt="image" class="img-thumbnail" style="width: 200px; height: 150px;">
                                                                    </a>
                                                                @endif
                                                                <div class="category">
                                                                    <h4>{{ $category->name }}</h4>
                                                                </div>
                                                                <a href="{{ route('products.index', ['category' => $category->id]) }}" class="link-btn {{ request()->is('products?category=' . $category->id) ? 'active' : '' }}">
                                                                </a>
                                                            </div>
                                                            </div>
                                                                @endforeach


                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item " style="margin-left: 22px"><a href="/contact" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact Us </a></li>

                    </ul>

                    <div class="others-option">
                        <div class="option-item">
                            <div class="search-btn-box">
                                <i class="search-btn bx bx-search-alt"></i>
                            </div>
                        </div>

                        <div class="option-item">
                            <div class="cart-btn">
                                <a href="/cart"><i class='bx bx-shopping-bag'></i><span>@livewire('cart-counter')</span></a>
                            </div>
                        </div>

{{--                        <div class="option-item">--}}
{{--                            <div class="burger-menu" data-bs-toggle="modal" data-bs-target="#sidebarModal">--}}
{{--                                <span class="top-bar"></span>--}}
{{--                                <span class="middle-bar"></span>--}}
{{--                                <span class="bottom-bar"></span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->

<!-- Start Sticky Navbar Area -->
<div class="navbar-area header-sticky">
    <div class="xton-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="/assets/img/logo.png" class="main-logo" alt="logo" style="width: 100px">
                    <img src="/assets/img/logo.png" class="white-logo" alt="logo" style="width: 100px">
                </a>

                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>

                        </li>

                        <li class="nav-item "><a href="/about" class="nav-link {{ request()->is('about') ? 'active' : '' }}">About Us </a></li>

                        <li class="nav-item "><a href="/products" class="nav-link {{ request()->is('products') ? 'active' : '' }}">Shop </a></li>

                        <li class="nav-item megamenu"><a href="#" class="nav-link {{ request()->is('collection') ? 'active' : '' }}">Collection <i class='bx bx-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <div class="container">
                                        <div class="col">
                                            <ul class="megamenu-submenu">
                                                <li>
                                                    <div class="row">


                                                        @foreach($categories as $category)
                                                            <div class="col-md-2 d-flex justify-content-center align-items-center">
                                                                <div class="aside-trending-products">
                                                                    @if($category->hasMedia('gallery'))
                                                                        <a href="{{ route('products.index', ['category' => $category->id]) }}">
                                                                            <img src="{{ $category->getFirstMediaURL('gallery', 'thumb') }}" alt="image" class="img-thumbnail" style="width: 200px; height: 150px;">
                                                                        </a>
                                                                    @endif
                                                                    <div class="category">
                                                                        <h4>{{ $category->name }}</h4>
                                                                    </div>
                                                                    <a href="{{ route('products.index', ['category' => $category->id]) }}" class="link-btn {{ request()->is('products?category=' . $category->id) ? 'active' : '' }}">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        @endforeach


                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item megamenu"><a href="/contact" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact Us </a></li>

                    </ul>

                    <div class="others-option">
                        <div class="option-item">
                            <div class="search-btn-box">
                                <i class="search-btn bx bx-search-alt"></i>
                            </div>
                        </div>

                        <div class="option-item">
                            <div class="cart-btn">
                                <a href="/cart"><i class='bx bx-shopping-bag'></i><span>@livewire('cart-counter')</span></a>

                            </div>
                        </div>

                        <div class="option-item">
                            <div class="burger-menu" data-bs-toggle="modal" data-bs-target="#sidebarModal">
                                <span class="top-bar"></span>
                                <span class="middle-bar"></span>
                                <span class="bottom-bar"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Header Area -->





<!-- Start Search Overlay -->
<div class="search-overlay">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>

            <div class="search-overlay-close">
                <span class="search-overlay-close-line"></span>
                <span class="search-overlay-close-line"></span>
            </div>

            <div class="search-overlay-form">
                <form>
                    <input type="text" class="input-search" placeholder="Search here...">
                    <button type="submit"><i class='bx bx-search-alt'></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Search Overlay -->

<!-- End Search Overlay -->







{{$slot}}

<!-- Start Footer Area -->
<footer class="footer-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>About The Store</h3>

                    <div class="about-the-store">
                        <p>One of the most popular on the web is shopping.</p>
                        <ul class="footer-contact-info">
                            <li><i class='bx bx-map'></i>
                                <a href="#" target="_blank">
                                    {{ business('business_address') }}
                                </a>
                            </li>
                            <li><i class='bx bx-phone-call'></i>
                                <a href="tel:{{ business('business_phone_1') }}">
                                    {{ business('business_phone_1') }}
                                </a>
                                @if(business('business_phone_2'))
                                    {{ ','.' ' }}<a href="tel:{{ business('business_phone_2') }}">
                                        {{ business('business_phone_2') }}
                                    </a>
                                @endif
                            </li>
                            <li><i class='bx bx-envelope'></i>
                                <a href="mailto:{{ business('business_email') }}">
                                    {{ business('business_email') }}
                                </a>
                            </li>
                        </ul>
                    </div>

                    <ul class="social-link">
                        <li><a href="{{ business('facebook_url') }}" class="d-block" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                        <li><a href="{{ business('instagram_url') }}" class="d-block" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                        <li><a href="https://wa.me/{{ business('business_whatsapp') }}" class="d-block" target="_blank"><i class='bx bxl-whatsapp'></i></a></li>


                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget pl-4">
                    @php
                        $policies = \App\Models\Policy::where('status', 1)->orderBy('sort_order')->get();
                    @endphp
                    <h3>Quick Links</h3>
                    <ul class="quick-links">
                        @foreach($policies as $policy)
                            <li><a href="{{ route('policies.show', $policy->slug) }}" target="_blank">{{ $policy->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Customer Support</h3>

                    <ul class="customer-support">
                        <li><a href="/contact">Contact Us</a></li>
                        @if(auth()->user())
                            <li><a href="/user/profile">My Account</a></li>
                        @else
                            <li><a href="/login">Login</a></li>
                            <li><a href="/register">Register</a></li>
                        @endif
                        @if(auth()->user())
                            <li><a href="/checkout">Checkout</a></li>
                        @endif
                        <li><a href="/cart">Cart</a></li>
                        <li><a href="faqs.html">FAQ's</a></li>
{{--                        <li><a href="track-order.html">Order Tracking</a></li>--}}
{{--                        <li><a href="contact.html">Help & Support</a></li>--}}
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Newsletter</h3>

                    <div class="footer-newsletter-box">
                        <p>To get the latest news and latest updates from us.</p>

                        <form class="newsletter-form" data-bs-toggle="validator">
                            <label>Your E-mail Address:</label>
                            <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
                            <button type="submit">Subscribe</button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom-area">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-6">
                    <p>© Copyright 2024 © urbanink.lk  All Rights Reserved. Solution by  Adlux</p>
                </div>

                <div class="col-lg-6 col-md-6">
                    <ul class="payment-types">
                        <li><a href="#" target="_blank"><img src="assets/img/payment/visa.png" alt="image"></a></li>
                        <li><a href="#" target="_blank"><img src="assets/img/payment/mastercard.png" alt="image"></a></li>
                        <li><a href="#" target="_blank"><img src="assets/img/payment/mastercard2.png" alt="image"></a></li>
                        <li><a href="#" target="_blank"><img src="assets/img/payment/visa2.png" alt="image"></a></li>
                        <li><a href="#" target="_blank"><img src="assets/img/payment/expresscard.png" alt="image"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</footer>
<!-- End Footer Area -->

<div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

<!-- Links of JS files -->
<script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('/assets/js/parallax.min.js') }}"></script>
<script src="{{ asset('/assets/js/rangeSlider.min.js') }}"></script>
<script src="{{ asset('/assets/js/nice-select.min.js') }}"></script>
<script src="{{ asset('/assets/js/meanmenu.min.js') }}"></script>
<script src="{{ asset('/assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('/assets/js/slick.min.js') }}"></script>
<script src="{{ asset('/assets/js/sticky-sidebar.min.js') }}"></script>
<script src="{{ asset('/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('/assets/js/form-validator.min.js') }}"></script>
<script src="{{ asset('/assets/js/contact-form-script.js') }}"></script>
<script src="{{ asset('/assets/js/ajaxchimp.min.js') }}"></script>
<script src="{{ asset('/assets/js/main.js') }}"></script>
</body>
</html>
