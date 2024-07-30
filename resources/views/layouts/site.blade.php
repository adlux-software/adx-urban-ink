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
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rangeSlider.min.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}?update={{ filemtime(public_path('assets/css/style.css')) }}" />    <link rel="stylesheet" href="{{ asset('assets/css/dark.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <title>UBERINK</title>

    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>
<!-- Start Top Header Area -->

<div class="top-header">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-12">
                <ul class="header-contact-info">
                    <li>Welcome to URBONINK</li>
                    <li>Call: <a href="tel:+01321654214">+01 321 654 214</a></li>
                  </ul>
            </div>

            <div class="col-lg-6 col-md-12">
                <ul class="header-top-menu">
{{--                    <li><a href="login.html"><i class='bx bxs-user'></i> My Account</a></li>--}}
                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal"><i class='bx bx-heart'></i> Wishlist</a></li>
                    <li><a href="compare.html"><i class='bx bx-shuffle'></i> Compare</a></li>
                    @if (Route::has('login'))
                        @auth
                            <li><a href="{{ url('/user/profile') }}"><i class='bx bxs-user'></i>Hi,{{ Auth::user()->name }}</a></li>

                        @else
                            <li><a href="{{ route('login') }}"><i class='bx bx-log-in'></i> Login</a></li>

                        @endif
                        @endauth

        </ul>

                <ul class="header-top-others-option">
                    <div class="option-item">
                        <div class="search-btn-box">
                            <i class="search-btn bx bx-search-alt"></i>
                        </div>
                    </div>

                    <div class="option-item">
                        <div class="cart-btn">
                            <a href="/cart" ><i class='bx bx-shopping-bag'></i><span>{{Cart::count()}}</span></a>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Top Header Area -->

<!-- Start Navbar Area -->
<div class="navbar-area navbar-style-two">
    <div class="xton-responsive-nav">
        <div class="container">
            <div class="xton-responsive-menu">
                <div class="logo">
                    <a href="index.html" style="height: 10px">
                        <img src="assets/img/logo.png" class="main-logo" alt="logo" style="width: 100px">
                        <img src="assets/img/white-logo.png" class="white-logo" alt="logo" style="width: 100px">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="xton-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.png" class="main-logo" alt="logo" style="width: 100px">
                    <img src="assets/img/white-logo.png" class="white-logo" alt="logo" style="width: 100px">
                </a>

                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="/" class="nav-link active">Home </a>

                        </li>



{{--                        <li class="nav-item megamenu"><a href="#" class="nav-link">Pages <i class='bx bx-chevron-down'></i></a>--}}
{{--                            <ul class="dropdown-menu">--}}
{{--                                <li class="nav-item">--}}
{{--                                    <div class="container">--}}
{{--                                        <div class="row justify-content-center">--}}
{{--                                            <div class="col">--}}
{{--                                                <h6 class="submenu-title">Pages</h6>--}}

{{--                                                <ul class="megamenu-submenu">--}}
{{--                                                    <li><a href="about.html">About Us</a></li>--}}

{{--                                                    <li><a href="customer-service.html">Customer Service</a></li>--}}

{{--                                                    <li><a href="login.html">Login</a></li>--}}

{{--                                                    <li><a href="signup.html">Signup</a></li>--}}

{{--                                                    <li><a href="faqs.html">FAQ's</a></li>--}}

{{--                                                    <li><a href="error-404.html">404 Error</a></li>--}}

{{--                                                    <li><a href="coming-soon.html">Coming Soon</a></li>--}}

{{--                                                    <li><a href="track-order.html">Tracking Order</a></li>--}}

{{--                                                    <li><a href="contact.html">Contact Us</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}

{{--                                            <div class="col">--}}
{{--                                                <h6 class="submenu-title">Gallery</h6>--}}

{{--                                                <ul class="megamenu-submenu">--}}
{{--                                                    <li><a href="gallery-1.html">Grid (2 in Row)</a></li>--}}

{{--                                                    <li><a href="gallery-2.html">Grid (3 in Row)</a></li>--}}

{{--                                                    <li><a href="gallery-3.html">Grid Full Width (3 in Row)</a></li>--}}

{{--                                                    <li><a href="gallery-4.html">Grid Full Width (4 in Row)</a></li>--}}

{{--                                                    <li><a href="gallery-5.html">Masonry (3 in Row)</a></li>--}}

{{--                                                    <li><a href="gallery-6.html">Masonry (4 in Row)</a></li>--}}
{{--                                                </ul>--}}

{{--                                                <h6 class="submenu-title">My Account</h6>--}}

{{--                                                <ul class="megamenu-submenu">--}}
{{--                                                    <li><a href="login.html">Login</a></li>--}}

{{--                                                    <li><a href="signup.html">Signup</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}

{{--                                            <div class="col">--}}
{{--                                                <h6 class="submenu-title">Categories</h6>--}}

{{--                                                <ul class="megamenu-submenu">--}}
{{--                                                    <li><a href="categories-1.html">Categories (2 in Row)</a></li>--}}

{{--                                                    <li><a href="categories-2.html">Categories Fullwidth</a></li>--}}

{{--                                                    <li><a href="categories-3.html">Categories (1 in Row)</a></li>--}}

{{--                                                    <li><a href="categories-4.html">Categories Full Width (3 in Row)</a></li>--}}
{{--                                                </ul>--}}

{{--                                                <h6 class="submenu-title">Lookbook</h6>--}}

{{--                                                <ul class="megamenu-submenu">--}}
{{--                                                    <li><a href="lookbook-1.html">Grid (3 in Row)</a></li>--}}

{{--                                                    <li><a href="lookbook-2.html">Grid Full Width (4 in Row)</a></li>--}}

{{--                                                    <li><a href="lookbook-3.html">Masonry (3 in Row)</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}

{{--                                            <div class="col">--}}
{{--                                                <h6 class="submenu-title">Shop</h6>--}}

{{--                                                <ul class="megamenu-submenu">--}}
{{--                                                    <li><a href="cart.html">Cart</a></li>--}}

{{--                                                    <li><a href="checkout.html">Cehckout</a></li>--}}

{{--                                                    <li><a href="compare.html">Compare</a></li>--}}

{{--                                                    <li><a href="login.html">My Account</a></li>--}}

{{--                                                    <li><a href="sizing-guide.html">Sizing Guide</a></li>--}}

{{--                                                    <li><a href="track-order.html">Tracking Order</a></li>--}}

{{--                                                    <li><a href="customer-service.html">Customer Service</a></li>--}}

{{--                                                    <li><a href="contact.html">Contact Us</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                        <li class="nav-item megamenu"><a href="/about" class="nav-link">About US </a>

                        </li>
                        <li class="nav-item megamenu"><a href="/products" class="nav-link">All T-Shirts </a>

                        </li>
                        <li class="nav-item megamenu"><a href="#" class="nav-link">Women's <i class='bx bx-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col">
                                                <h6 class="submenu-title">Graphic T-Shirts</h6>

                                                <ul class="megamenu-submenu">
                                                    <li><a href="products-left-sidebar.html">Abstract</a></li>

                                                    <li><a href="products-left-sidebar-with-categories.html">Anime</a></li>

                                                    <li><a href="products-right-sidebar.html">Classic</a></li>

                                                    <li><a href="products-right-sidebar-with-categories.html">Thypography</a></li>

                                                    <li><a href="products-one-row.html">Travel</a></li>

                                                    <li><a href="products-without-sidebar.html">Sri Lanka</a></li>

                                                    <li><a href="products-sidebar-fullwidth.html">Cubism</a></li>
                                                </ul>
                                            </div>

                                            <div class="col">
                                                <h6 class="submenu-title">Popular Products</h6>

                                                <ul class="megamenu-submenu">
                                                    <li><a href="products-left-sidebar.html">Abstract</a></li>

                                                    <li><a href="products-left-sidebar-with-categories.html">Anime</a></li>

                                                    <li><a href="products-right-sidebar.html">Classic</a></li>

                                                    <li><a href="products-right-sidebar-with-categories.html">Thypography</a></li>

                                                    <li><a href="products-one-row.html">Travel</a></li>

                                                    <li><a href="products-without-sidebar.html">Sri Lanka</a></li>

                                                    <li><a href="products-sidebar-fullwidth.html">Cubism</a></li>
                                                </ul>
                                            </div>
                                            <div class="col">
                                                <h6 class="submenu-title">Top Trending</h6>

                                                <ul class="megamenu-submenu">
                                                    <li><a href="products-left-sidebar.html">Abstract</a></li>

                                                    <li><a href="products-left-sidebar-with-categories.html">Anime</a></li>

                                                    <li><a href="products-right-sidebar.html">Classic</a></li>

                                                    <li><a href="products-right-sidebar-with-categories.html">Thypography</a></li>

                                                    <li><a href="products-one-row.html">Travel</a></li>

                                                    <li><a href="products-without-sidebar.html">Sri Lanka</a></li>

                                                    <li><a href="products-sidebar-fullwidth.html">Cubism</a></li>
                                                </ul>
                                            </div>

                                            <div class="col">
                                                <ul class="megamenu-submenu">
                                                    <li>
                                                        <div class="aside-trending-products">
                                                            <img src="assets/img/categories/img1.jpg" alt="image">

                                                            <div class="category">
                                                                <h4>Top Trending</h4>
                                                            </div>

                                                            <a href="products-right-sidebar.html" class="link-btn"></a>
                                                        </div>

                                                        <div class="aside-trending-products">
                                                            <img src="assets/img/categories/img2.jpg" alt="image">

                                                            <div class="category">
                                                                <h4>Popular Products</h4>
                                                            </div>

                                                            <a href="products-right-sidebar.html" class="link-btn"></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item megamenu"><a href="#" class="nav-link">Men's<i class='bx bx-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col">
                                                <h6 class="submenu-title">Graphic T-Shirts</h6>

                                                <ul class="megamenu-submenu">
                                                    <li><a href="products-left-sidebar.html">Abstract</a></li>

                                                    <li><a href="products-left-sidebar-with-categories.html">Anime</a></li>

                                                    <li><a href="products-right-sidebar.html">Classic</a></li>

                                                    <li><a href="products-right-sidebar-with-categories.html">Thypography</a></li>

                                                    <li><a href="products-one-row.html">Travel</a></li>

                                                    <li><a href="products-without-sidebar.html">Sri Lanka</a></li>

                                                    <li><a href="products-sidebar-fullwidth.html">Cubism</a></li>
                                                </ul>
                                            </div>

                                            <div class="col">
                                                <h6 class="submenu-title">Popular Products</h6>

                                                <ul class="megamenu-submenu">
                                                    <li><a href="products-left-sidebar.html">Abstract</a></li>

                                                    <li><a href="products-left-sidebar-with-categories.html">Anime</a></li>

                                                    <li><a href="products-right-sidebar.html">Classic</a></li>

                                                    <li><a href="products-right-sidebar-with-categories.html">Thypography</a></li>

                                                    <li><a href="products-one-row.html">Travel</a></li>

                                                    <li><a href="products-without-sidebar.html">Sri Lanka</a></li>

                                                    <li><a href="products-sidebar-fullwidth.html">Cubism</a></li>
                                                </ul>
                                            </div>
                                            <div class="col">
                                                <h6 class="submenu-title">Top Trending</h6>

                                                <ul class="megamenu-submenu">
                                                    <li><a href="products-left-sidebar.html">Abstract</a></li>

                                                    <li><a href="products-left-sidebar-with-categories.html">Anime</a></li>

                                                    <li><a href="products-right-sidebar.html">Classic</a></li>

                                                    <li><a href="products-right-sidebar-with-categories.html">Thypography</a></li>

                                                    <li><a href="products-one-row.html">Travel</a></li>

                                                    <li><a href="products-without-sidebar.html">Sri Lanka</a></li>

                                                    <li><a href="products-sidebar-fullwidth.html">Cubism</a></li>
                                                </ul>
                                            </div>

                                            <div class="col">
                                                <ul class="megamenu-submenu">
                                                    <li>
                                                        <div class="aside-trending-products">
                                                            <img src="assets/img/categories/img1.jpg" alt="image">

                                                            <div class="category">
                                                                <h4>Top Trending</h4>
                                                            </div>

                                                            <a href="products-right-sidebar.html" class="link-btn"></a>
                                                        </div>

                                                        <div class="aside-trending-products">
                                                            <img src="assets/img/categories/img2.jpg" alt="image">

                                                            <div class="category">
                                                                <h4>Popular Products</h4>
                                                            </div>

                                                            <a href="products-right-sidebar.html" class="link-btn"></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>


       <li class="nav-item megamenu"><a href="/contact" class="nav-link">Contact Us</a>

                        </li>
                    </ul>

                    <div class="others-option">
                        <div class="option-item">
                            <div class="search-btn-box">
                                <i class="search-btn bx bx-search-alt"></i>
                            </div>
                        </div>

                        <div class="option-item">
                            <div class="cart-btn">
                                <a href="#" ><i class='bx bx-shopping-bag'></i><span>{{ \App\Models\Cart::totalProductCount() }}</span></a>
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
<!-- End Navbar Area -->

<!-- Start Sticky Navbar Area -->
<div class="navbar-area navbar-style-two header-sticky">
    <div class="xton-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index-5.html">
                    <img src="assets/img/logo.png" alt="logo" style="width: 100px">
                </a>

                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="/" class="nav-link active">Home <i class='bx bx-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="index.html" class="nav-link">Home 1</a></li>

                                <li class="nav-item"><a href="index-2.html" class="nav-link">Home 2</a></li>

                                <li class="nav-item"><a href="index-3.html" class="nav-link">Home 3</a></li>

                                <li class="nav-item"><a href="index-4.html" class="nav-link">Home 4</a></li>

                                <li class="nav-item"><a href="index-5.html" class="nav-link active">Home 5</a></li>
                            </ul>
                        </li>

                        <li class="nav-item megamenu"><a href="#" class="nav-link">Shop <i class='bx bx-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col">
                                                <h6 class="submenu-title">Shop Styles</h6>

                                                <ul class="megamenu-submenu">
                                                    <li><a href="products-left-sidebar.html">Left Sidebar</a></li>

                                                    <li><a href="products-left-sidebar-with-categories.html">Left Sidebar With Categories</a></li>

                                                    <li><a href="products-right-sidebar.html">Right Sidebar</a></li>

                                                    <li><a href="products-right-sidebar-with-categories.html">Right Sidebar With Categories</a></li>

                                                    <li><a href="products-one-row.html">1 Products Per Row</a></li>

                                                    <li><a href="products-without-sidebar.html">Without Sidebar</a></li>

                                                    <li><a href="products-sidebar-fullwidth.html">With Sidebar Full Width</a></li>
                                                </ul>
                                            </div>

                                            <div class="col">
                                                <h6 class="submenu-title">Shop Styles 2</h6>

                                                <ul class="megamenu-submenu">
                                                    <li><a href="products-left-sidebar-2.html">Left Sidebar</a></li>

                                                    <li><a href="products-left-sidebar-with-categories-2.html">Left Sidebar With Categories</a></li>

                                                    <li><a href="products-right-sidebar-2.html">Right Sidebar</a></li>

                                                    <li><a href="products-right-sidebar-with-categories-2.html">Right Sidebar With Categories</a></li>

                                                    <li><a href="products-one-row-2.html">1 Products Per Row</a></li>

                                                    <li><a href="products-without-sidebar-2.html">Without Sidebar</a></li>

                                                    <li><a href="products-sidebar-fullwidth-2.html">With Sidebar Full Width</a></li>
                                                </ul>
                                            </div>

                                            <div class="col">
                                                <h6 class="submenu-title">Shop Styles 3</h6>

                                                <ul class="megamenu-submenu">
                                                    <li><a href="products-left-sidebar-3.html">Left Sidebar</a></li>

                                                    <li><a href="products-left-sidebar-with-categories-3.html">Left Sidebar With Categories</a></li>

                                                    <li><a href="products-right-sidebar-3.html">Right Sidebar</a></li>

                                                    <li><a href="products-right-sidebar-with-categories-3.html">Right Sidebar With Categories</a></li>

                                                    <li><a href="products-one-row-3.html">1 Products Per Row</a></li>

                                                    <li><a href="products-without-sidebar-3.html">Without Sidebar</a></li>

                                                    <li><a href="products-sidebar-fullwidth-3.html">With Sidebar Full Width</a></li>
                                                </ul>
                                            </div>

                                            <div class="col">
                                                <h6 class="submenu-title">Product Pages</h6>

                                                <ul class="megamenu-submenu">
                                                    <li><a href="products-type-1.html">Default Style</a></li>

                                                    <li><a href="products-type-2.html">Thumbs List</a></li>

                                                    <li><a href="products-type-3.html">Grid Style</a></li>

                                                    <li><a href="products-type-4.html">Sticky Details</a></li>

                                                    <li><a href="products-type-5.html">Slider Image</a></li>

                                                    <li><a href="cart.html">Cart</a></li>

                                                    <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="brand-slides owl-carousel owl-theme">
                                            <div class="brand-item">
                                                <a href="#"><img src="assets/img/brand/img1.png" alt="image"></a>
                                            </div>

                                            <div class="brand-item">
                                                <a href="#"><img src="assets/img/brand/img2.png" alt="image"></a>
                                            </div>

                                            <div class="brand-item">
                                                <a href="#"><img src="assets/img/brand/img3.png" alt="image"></a>
                                            </div>

                                            <div class="brand-item">
                                                <a href="#"><img src="assets/img/brand/img4.png" alt="image"></a>
                                            </div>

                                            <div class="brand-item">
                                                <a href="#"><img src="assets/img/brand/img5.png" alt="image"></a>
                                            </div>

                                            <div class="brand-item">
                                                <a href="#"><img src="assets/img/brand/img6.png" alt="image"></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item megamenu"><a href="#" class="nav-link">Pages <i class='bx bx-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col">
                                                <h6 class="submenu-title">Pages</h6>

                                                <ul class="megamenu-submenu">
                                                    <li><a href="about">About Us</a></li>

                                                    <li><a href="customer-service.html">Customer Service</a></li>

                                                    <li><a href="login.html">Login</a></li>

                                                    <li><a href="signup.html">Signup</a></li>

                                                    <li><a href="faqs.html">FAQ's</a></li>

                                                    <li><a href="error-404.html">404 Error</a></li>

                                                    <li><a href="coming-soon.html">Coming Soon</a></li>

                                                    <li><a href="track-order.html">Tracking Order</a></li>

                                                    <li><a href="contact.html">Contact Us</a></li>
                                                </ul>
                                            </div>

                                            <div class="col">
                                                <h6 class="submenu-title">Gallery</h6>

                                                <ul class="megamenu-submenu">
                                                    <li><a href="gallery-1.html">Grid (2 in Row)</a></li>

                                                    <li><a href="gallery-2.html">Grid (3 in Row)</a></li>

                                                    <li><a href="gallery-3.html">Grid Full Width (3 in Row)</a></li>

                                                    <li><a href="gallery-4.html">Grid Full Width (4 in Row)</a></li>

                                                    <li><a href="gallery-5.html">Masonry (3 in Row)</a></li>

                                                    <li><a href="gallery-6.html">Masonry (4 in Row)</a></li>
                                                </ul>

                                                <h6 class="submenu-title">My Account</h6>

                                                <ul class="megamenu-submenu">
                                                    <li><a href="login.html">Login</a></li>

                                                    <li><a href="signup.html">Signup</a></li>
                                                </ul>
                                            </div>

                                            <div class="col">
                                                <h6 class="submenu-title">Categories</h6>

                                                <ul class="megamenu-submenu">
                                                    <li><a href="categories-1.html">Categories (2 in Row)</a></li>

                                                    <li><a href="categories-2.html">Categories Fullwidth</a></li>

                                                    <li><a href="categories-3.html">Categories (1 in Row)</a></li>

                                                    <li><a href="categories-4.html">Categories Full Width (3 in Row)</a></li>
                                                </ul>

                                                <h6 class="submenu-title">Lookbook</h6>

                                                <ul class="megamenu-submenu">
                                                    <li><a href="lookbook-1.html">Grid (3 in Row)</a></li>

                                                    <li><a href="lookbook-2.html">Grid Full Width (4 in Row)</a></li>

                                                    <li><a href="lookbook-3.html">Masonry (3 in Row)</a></li>
                                                </ul>
                                            </div>

                                            <div class="col">
                                                <h6 class="submenu-title">Shop</h6>

                                                <ul class="megamenu-submenu">
                                                    <li><a href="cart.html">Cart</a></li>

                                                    <li><a href="checkout.html">Cehckout</a></li>

                                                    <li><a href="compare.html">Compare</a></li>

                                                    <li><a href="login.html">My Account</a></li>

                                                    <li><a href="sizing-guide.html">Sizing Guide</a></li>

                                                    <li><a href="track-order.html">Tracking Order</a></li>

                                                    <li><a href="customer-service.html">Customer Service</a></li>

                                                    <li><a href="contact.html">Contact Us</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item megamenu"><a href="#" class="nav-link">Women's <i class='bx bx-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col">
                                                <h6 class="submenu-title">Graphic T-Shirts</h6>

                                                <ul class="megamenu-submenu">
                                                    <li><a href="products-left-sidebar.html">Abstract</a></li>

                                                    <li><a href="products-left-sidebar-with-categories.html"> Anime</a></li>

                                                    <li><a href="products-right-sidebar.html">Classic</a></li>

                                                    <li><a href="products-right-sidebar-with-categories.html">Thypography</a></li>

                                                    <li><a href="products-one-row.html">Travel</a></li>

                                                    <li><a href="products-without-sidebar.html">Sri Lanka</a></li>

                                                    <li><a href="products-sidebar-fullwidth.html">Cubism</a></li>
                                                </ul>
                                            </div>

                                            <div class="col">
                                                <h6 class="submenu-title">Popular Products</h6>

                                                <ul class="megamenu-submenu">
                                                    <li><a href="products-left-sidebar.html">Abstract</a></li>

                                                    <li><a href="products-left-sidebar-with-categories.html"> Anime</a></li>

                                                    <li><a href="products-right-sidebar.html">Classic</a></li>

                                                    <li><a href="products-right-sidebar-with-categories.html">Thypography</a></li>

                                                    <li><a href="products-one-row.html">Travel</a></li>

                                                    <li><a href="products-without-sidebar.html">Sri Lanka</a></li>

                                                    <li><a href="products-sidebar-fullwidth.html">Cubism</a></li>
                                                </ul>
                                            </div><div class="col">
                                                <h6 class="submenu-title">Top Trending</h6>

                                                <ul class="megamenu-submenu">
                                                    <li><a href="products-left-sidebar.html">Abstract</a></li>

                                                    <li><a href="products-left-sidebar-with-categories.html"> Anime</a></li>

                                                    <li><a href="products-right-sidebar.html">Classic</a></li>

                                                    <li><a href="products-right-sidebar-with-categories.html">Thypography</a></li>

                                                    <li><a href="products-one-row.html">Travel</a></li>

                                                    <li><a href="products-without-sidebar.html">Sri Lanka</a></li>

                                                    <li><a href="products-sidebar-fullwidth.html">Cubism</a></li>
                                                </ul>
                                            </div>

                                            <div class="col">
                                                <ul class="megamenu-submenu">
                                                    <li>
                                                        <div class="aside-trending-products">
                                                            <img src="assets/img/categories/img1.jpg" alt="image">

                                                            <div class="category">
                                                                <h4>Top Trending</h4>
                                                            </div>

                                                            <a href="products-right-sidebar.html" class="link-btn"></a>
                                                        </div>

                                                        <div class="aside-trending-products">
                                                            <img src="assets/img/categories/img2.jpg" alt="image">

                                                            <div class="category">
                                                                <h4>Popular Products</h4>
                                                            </div>

                                                            <a href="products-right-sidebar.html" class="link-btn"></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item megamenu"><a href="#" class="nav-link">Men's <i class='bx bx-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col">
                                                <h6 class="submenu-title">Shop Styles</h6>

                                                <ul class="megamenu-submenu">
                                                    <li><a href="products-left-sidebar.html">Left Sidebar</a></li>

                                                    <li><a href="products-left-sidebar-with-categories.html">Left Sidebar With Categories</a></li>

                                                    <li><a href="products-right-sidebar.html">Right Sidebar</a></li>

                                                    <li><a href="products-right-sidebar-with-categories.html">Right Sidebar With Categories</a></li>

                                                    <li><a href="products-one-row.html">1 Products Per Row</a></li>

                                                    <li><a href="products-without-sidebar.html">Without Sidebar</a></li>

                                                    <li><a href="products-sidebar-fullwidth.html">With Sidebar Full Width</a></li>
                                                </ul>
                                            </div>

                                            <div class="col">
                                                <h6 class="submenu-title">Shop Styles 2</h6>

                                                <ul class="megamenu-submenu">
                                                    <li><a href="products-left-sidebar-2.html">Left Sidebar</a></li>

                                                    <li><a href="products-left-sidebar-with-categories-2.html">Left Sidebar With Categories</a></li>

                                                    <li><a href="products-right-sidebar-2.html">Right Sidebar</a></li>

                                                    <li><a href="products-right-sidebar-with-categories-2.html">Right Sidebar With Categories</a></li>

                                                    <li><a href="products-one-row-2.html">1 Products Per Row</a></li>

                                                    <li><a href="products-without-sidebar-2.html">Without Sidebar</a></li>

                                                    <li><a href="products-sidebar-fullwidth-2.html">With Sidebar Full Width</a></li>
                                                </ul>
                                            </div>

                                            <div class="col">
                                                <h6 class="submenu-title">Shop Styles 3</h6>

                                                <ul class="megamenu-submenu">
                                                    <li><a href="products-left-sidebar-3.html">Left Sidebar</a></li>

                                                    <li><a href="products-left-sidebar-with-categories-3.html">Left Sidebar With Categories</a></li>

                                                    <li><a href="products-right-sidebar-3.html">Right Sidebar</a></li>

                                                    <li><a href="products-right-sidebar-with-categories-3.html">Right Sidebar With Categories</a></li>

                                                    <li><a href="products-one-row-3.html">1 Products Per Row</a></li>

                                                    <li><a href="products-without-sidebar-3.html">Without Sidebar</a></li>

                                                    <li><a href="products-sidebar-fullwidth-3.html">With Sidebar Full Width</a></li>
                                                </ul>
                                            </div>

                                            <div class="col">
                                                <ul class="megamenu-submenu">
                                                    <li>
                                                        <div class="aside-trending-products">
                                                            <img src="assets/img/categories/img2.jpg" alt="image">

                                                            <div class="category">
                                                                <h4>Popular Products</h4>
                                                            </div>

                                                            <a href="products-right-sidebar.html" class="link-btn"></a>
                                                        </div>

                                                        <div class="aside-trending-products">
                                                            <img src="assets/img/categories/img1.jpg" alt="image">

                                                            <div class="category">
                                                                <h4>Top Trending</h4>
                                                            </div>

                                                            <a href="products-right-sidebar.html" class="link-btn"></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item"><a href="#" class="nav-link">Blog <i class='bx bx-chevron-down'></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="blog-1.html" class="nav-link">Grid (2 in Row)</a></li>

                                <li class="nav-item"><a href="blog-2.html" class="nav-link">Grid (3 in Row)</a></li>

                                <li class="nav-item"><a href="blog-3.html" class="nav-link">Grid (4 in Row)</a></li>

                                <li class="nav-item"><a href="blog-4.html" class="nav-link">Grid (Full Width)</a></li>

                                <li class="nav-item"><a href="blog-5.html" class="nav-link">Right Sidebar</a></li>

                                <li class="nav-item"><a href="blog-6.html" class="nav-link">Masonry (3 in Row)</a></li>

                                <li class="nav-item"><a href="#" class="nav-link">Single Post <i class='bx bx-chevron-right'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="single-blog-1.html" class="nav-link">Default</a></li>

                                        <li class="nav-item"><a href="single-blog-2.html" class="nav-link">With Video</a></li>

                                        <li class="nav-item"><a href="single-blog-3.html" class="nav-link">With Image Slider</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <div class="others-option">
                        <div class="option-item">
                            <div class="search-btn-box">
                                <i class="search-btn bx bx-search-alt"></i>
                            </div>
                        </div>

                        <div class="option-item">
                            <div class="cart-btn">
                                <a href="/cart" ><i class='bx bx-shopping-bag'></i><span>{{Cart::count()}}</span></a>
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
                            <li><i class='bx bx-map'></i> <a href="#" target="_blank">Wonder Street, USA, New York</a></li>
                            <li><i class='bx bx-phone-call'></i> <a href="tel:+01321654214">+01 321 654 214</a></li>
                            <li><i class='bx bx-envelope'></i> <a href="mailto:hello@xton.com">hello@xton.com</a></li>
                        </ul>
                    </div>

                    <ul class="social-link">
                        <li><a href="https://www.facebook.com/" class="d-block" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                        <li><a href="https://twitter.com/login" class="d-block" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                        <li><a href="https://www.instagram.com/" class="d-block" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                        <li><a href="https://www.linkedin.com/login" class="d-block" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                        <li><a href="https://www.pinterest.com/" class="d-block" target="_blank"><i class='bx bxl-pinterest-alt'></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget pl-4">
                    <h3>Quick Links</h3>

                    <ul class="quick-links">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="products-left-sidebar.html">Shop Now!</a></li>
                        <li><a href="products-left-sidebar-2.html">Woman's</a></li>
                        <li><a href="faqs.html">FAQ's</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="customer-service.html">Customer Services</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Customer Support</h3>

                    <ul class="customer-support">
                        <li><a href="login.html">My Account</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="faqs.html">FAQ's</a></li>
                        <li><a href="track-order.html">Order Tracking</a></li>
                        <li><a href="contact.html">Help & Support</a></li>
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
                    <p>© Xton is Proudly Owned by <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
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
