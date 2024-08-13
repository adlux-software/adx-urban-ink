<x-site-layout>

    <!-- Start Page Title -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>{{$product->title}}</h2>            <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Products Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title -->




    <!-- Start Product Details Area -->
    <section class="product-details-area pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-12">
                    <div class="products-details-image">

                        @if($product->hasMedia('gallery'))
                            @foreach($product->getMedia('gallery') as $media)
                                <div class="single-products-details-image">
                                    <img src="{{ $media->getUrl() }}" alt="image">
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>

                <div class="col-lg-7 col-md-12">
                    <div class="products-details-desc products-details-desc-sticky">

                        <livewire:add-to-cart :product="$product"/>

                        <div class="products-details-accordion">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title active" href="javascript:void(0)">
                                        <i class='bx bx-chevron-down'></i>
                                        Description
                                    </a>

                                    <div class="accordion-content show">

                                        <p>{!! $product->description !!}

                                    </div>
                                </li>
       <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-chevron-down'></i>
                                        Reviews
                                    </a>

                                    <div class="accordion-content">
                                        <div class="products-review-form">
                                            <h3>Customer Reviews</h3>

                                            <div class="review-title">
                                                <div class="rating">
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bx-star'></i>
                                                </div>
                                                <p>Based on 3 reviews</p>
                                                <a href="#" class="default-btn">Write a Review</a>
                                            </div>

                                            <div class="review-comments">
                                                <div class="review-item">
                                                    <div class="rating">
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bx-star'></i>
                                                    </div>
                                                    <h3>Good</h3>
                                                    <span><strong>Admin</strong> on <strong>Sep 21, 2024</strong></span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                                </div>

                                                <div class="review-item">
                                                    <div class="rating">
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bx-star'></i>
                                                    </div>
                                                    <h3>Good</h3>
                                                    <span><strong>Admin</strong> on <strong>Sep 21, 2024</strong></span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                                </div>

                                                <div class="review-item">
                                                    <div class="rating">
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bx-star'></i>
                                                    </div>
                                                    <h3>Good</h3>
                                                    <span><strong>Admin</strong> on <strong>Sep 21, 2024</strong></span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                                </div>
                                            </div>

                                            <div class="review-form">
                                                <h3>Write a Review</h3>

                                                <form>
                                                    <div class="row justify-content-center">
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" id="name" name="name" placeholder="Enter your name" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <input type="text" id="review-title" name="review-title" placeholder="Enter your review a title" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <textarea name="review-body" id="review-body" cols="30" rows="6" placeholder="Write your comments here" class="form-control"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12">
                                                            <button type="submit" class="default-btn">Submit Review</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="related-products">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Our Shop</span>
                    <h2>Related Products</h2>
                </div>

                <div class="products-slides owl-carousel owl-theme">


                    @php
                        $related_products = \App\Models\Product::where('category_id', $product->category_id)->get();
                    @endphp


                    @foreach($related_products as $related_product)

                    <div class="single-products-box">
                        <div class="products-image">

                            @if($related_product->hasMedia('featured'))

                                <a href="{{ route('product.show' , $related_product->slug) }}"> <img src="{{ $related_product->getFirstMediaURL('featured', 'thumb') }}" class="main-image" alt="image"></a>
                                <a href="{{ route('product.show' , $related_product->slug) }}"> <img src="{{ $related_product->getFirstMediaURL('featured', 'thumb') }}" class="hover-image" alt="image"></a>
                            @endif

                               <div class="products-button">
                                <ul>
                                    <li>
                                        <div class="wishlist-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#shoppingWishlistModal">
                                                <i class='bx bx-heart'></i>
                                                <span class="tooltip-label">Add to Wishlist</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="compare-btn">
                                            <a href="compare.html">
                                                <i class='bx bx-refresh'></i>
                                                <span class="tooltip-label">Compare</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="quick-view-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">
                                                <i class='bx bx-search-alt'></i>
                                                <span class="tooltip-label">Quick View</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="products-content">
                            <h3><a href="#">{{$related_product->title}}</a></h3>

                            @if($related_product->variants->count() > 0)
                                <div class="price">
                                    <span class="old-price">Rs.{{ $related_product->variants->first()->mrp }}</span>
                                    <span class="new-price">Rs.{{ $related_product->variants->first()->selling_price }}</span>
                                </div>
                            @endif

                            <div class="star-rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <a href="{{ route('product.show' , $related_product->slug) }}" class="add-to-cart">Buy Now</a>
                        </div>
                    </div>

                    @endforeach



                </div>
            </div>
        </div>
    </section>
    <!-- End Product Details Area -->






    <!-- Start Facility Area -->
    <section class="facility-area pb-70">
        <div class="container">
            <div class="facility-slides owl-carousel owl-theme">
                <div class="single-facility-box">
                    <div class="icon">
                        <i class='flaticon-tracking'></i>
                    </div>
                    <h3>Free Shipping Worldwide</h3>
                </div>

                <div class="single-facility-box">
                    <div class="icon">
                        <i class='flaticon-return'></i>
                    </div>
                    <h3>Easy Return Policy</h3>
                </div>

                <div class="single-facility-box">
                    <div class="icon">
                        <i class='flaticon-shuffle'></i>
                    </div>
                    <h3>7 Day Exchange Policy</h3>
                </div>

                <div class="single-facility-box">
                    <div class="icon">
                        <i class='flaticon-sale'></i>
                    </div>
                    <h3>Weekend Discount Coupon</h3>
                </div>

                <div class="single-facility-box">
                    <div class="icon">
                        <i class='flaticon-credit-card'></i>
                    </div>
                    <h3>Secure Payment Methods</h3>
                </div>

                <div class="single-facility-box">
                    <div class="icon">
                        <i class='flaticon-location'></i>
                    </div>
                    <h3>Track Your Package</h3>
                </div>

                <div class="single-facility-box">
                    <div class="icon">
                        <i class='flaticon-customer-service'></i>
                    </div>
                    <h3>24/7 Customer Support</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- End Facility Area -->

    <!-- Start Instagram Area -->
{{--    <div class="instagram-area">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="instagram-title">--}}
{{--                <a href="#" target="_blank"><i class='bx bxl-instagram'></i> Follow us on @xton</a>--}}
{{--            </div>--}}

{{--            <div class="instagram-slides owl-carousel owl-theme">--}}
{{--                <div class="single-instagram-post">--}}
{{--                    <img src="assets/img/instagram/img1.jpg" alt="image">--}}
{{--                    <i class='bx bxl-instagram'></i>--}}
{{--                    <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>--}}
{{--                </div>--}}

{{--                <div class="single-instagram-post">--}}
{{--                    <img src="assets/img/instagram/img2.jpg" alt="image">--}}
{{--                    <i class='bx bxl-instagram'></i>--}}
{{--                    <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>--}}
{{--                </div>--}}

{{--                <div class="single-instagram-post">--}}
{{--                    <img src="assets/img/instagram/img3.jpg" alt="image">--}}
{{--                    <i class='bx bxl-instagram'></i>--}}
{{--                    <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>--}}
{{--                </div>--}}

{{--                <div class="single-instagram-post">--}}
{{--                    <img src="assets/img/instagram/img4.jpg" alt="image">--}}
{{--                    <i class='bx bxl-instagram'></i>--}}
{{--                    <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>--}}
{{--                </div>--}}

{{--                <div class="single-instagram-post">--}}
{{--                    <img src="assets/img/instagram/img10.jpg" alt="image">--}}
{{--                    <i class='bx bxl-instagram'></i>--}}
{{--                    <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>--}}
{{--                </div>--}}

{{--                <div class="single-instagram-post">--}}
{{--                    <img src="assets/img/instagram/img6.jpg" alt="image">--}}
{{--                    <i class='bx bxl-instagram'></i>--}}
{{--                    <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>--}}
{{--                </div>--}}

{{--                <div class="single-instagram-post">--}}
{{--                    <img src="assets/img/instagram/img7.jpg" alt="image">--}}
{{--                    <i class='bx bxl-instagram'></i>--}}
{{--                    <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>--}}
{{--                </div>--}}

{{--                <div class="single-instagram-post">--}}
{{--                    <img src="assets/img/instagram/img8.jpg" alt="image">--}}
{{--                    <i class='bx bxl-instagram'></i>--}}
{{--                    <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>--}}
{{--                </div>--}}

{{--                <div class="single-instagram-post">--}}
{{--                    <img src="assets/img/instagram/img9.jpg" alt="image">--}}
{{--                    <i class='bx bxl-instagram'></i>--}}
{{--                    <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>--}}
{{--                </div>--}}

{{--                <div class="single-instagram-post">--}}
{{--                    <img src="assets/img/instagram/img5.jpg" alt="image">--}}
{{--                    <i class='bx bxl-instagram'></i>--}}
{{--                    <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- End Instagram Area -->--}}

    <!-- Start Sidebar Modal -->
    <div class="modal right fade sidebarModal" id="sidebarModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class='bx bx-x'></i></span>
                </button>

                <div class="modal-body">
                    <div class="sidebar-about-content">
                        <h3>About The Store</h3>

                        <div class="about-the-store">
                            <p>One of the most popular on the web is shopping. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                            <ul class="sidebar-contact-info">
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

                    <div class="sidebar-new-in-store">
                        <h3>New In Store</h3>

                        <ul class="products-list">
                            <li>
                                <a href="products-one-row-2.html"><img src="assets/img/products/img1.jpg" alt="image"></a>
                            </li>

                            <li>
                                <a href="products-one-row-2.html"><img src="assets/img/products/img2.jpg" alt="image"></a>
                            </li>

                            <li>
                                <a href="products-one-row-2.html"><img src="assets/img/products/img3.jpg" alt="image"></a>
                            </li>

                            <li>
                                <a href="products-one-row-2.html"><img src="assets/img/products/img4.jpg" alt="image"></a>
                            </li>
                        </ul>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="products-left-sidebar-with-categories-3.html" class="shop-now-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Modal -->

    <!-- Start QuickView Modal Area -->
    <div class="modal fade productsQuickView" id="productsQuickView" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class='bx bx-x'></i></span>
                </button>

                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="products-image">
                            <img src="assets/img/quick-view-img.jpg" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="products-content">
                            <h3><a href="#">{{$product->title}}</a></h3>

                            <div class="price">
                                <span class="old-price">$210.00</span>
                                <span class="new-price">$200.00</span>
                            </div>

                            <div class="products-review">
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <a href="#" class="rating-count">3 reviews</a>
                            </div>

                            <ul class="products-info">
                                <li><span>Vendor:</span> <a href="#">Lereve</a></li>
                                <li><span>Availability:</span> <a href="#">In stock (7 items)</a></li>
                                <li><span>Products Type:</span> <a href="#">T-Shirt</a></li>
                            </ul>

                            <div class="products-color-switch">
                                <h4>Color:</h4>

                                <ul>
                                    <li><a href="#" data-bs-toggle="tooltip" data-placement="top" title="Black" class="color-black"></a></li>
                                    <li><a href="#" data-bs-toggle="tooltip" data-placement="top" title="White" class="color-white"></a></li>
                                    <li><a href="#" data-bs-toggle="tooltip" data-placement="top" title="Green" class="color-green"></a></li>
                                    <li><a href="#" data-bs-toggle="tooltip" data-placement="top" title="Yellow Green" class="color-yellowgreen"></a></li>
                                    <li><a href="#" data-bs-toggle="tooltip" data-placement="top" title="Teal" class="color-teal"></a></li>
                                </ul>
                            </div>

                            <div class="products-size-wrapper">
                                <h4>Size:</h4>

                                <ul>
                                    <li><a href="#">XS</a></li>
                                    <li class="active"><a href="#">S</a></li>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">XL</a></li>
                                    <li><a href="#">XXL</a></li>
                                </ul>
                            </div>

                            <div class="products-add-to-cart">
                                <div class="input-counter">
                                    <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                    <input type="text" value="1">
                                    <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                </div>

                                <button type="submit" class="default-btn">Add to Cart</button>
                            </div>

                            <a href="#" class="view-full-info">View Full Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End QuickView Modal Area -->

    <!-- Start Shopping Cart Modal -->
    <div class="modal right fade shoppingCartModal" id="shoppingCartModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class='bx bx-x'></i></span>
                </button>

                <div class="modal-body">
                    <h3>My Cart (3)</h3>

                    <div class="products-cart-content">
                        <div class="products-cart">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/products/img1.jpg" alt="image"></a>
                            </div>

                            <div class="products-content">
                                <h3><a href="#">{{$product->title}}</a></h3>
                                <span>Blue / XS</span>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$250.00</span>
                                </div>
                                <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                            </div>
                        </div>

                        <div class="products-cart">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/products/img2.jpg" alt="image"></a>
                            </div>

                            <div class="products-content">
                                <h3><a href="#">Causal V-Neck Soft Raglan</a></h3>
                                <span>Blue / XS</span>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$200.00</span>
                                </div>
                                <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                            </div>
                        </div>

                        <div class="products-cart">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/products/img3.jpg" alt="image"></a>
                            </div>

                            <div class="products-content">
                                <h3><a href="#">Hanes Men's Pullover</a></h3>
                                <span>Blue / XS</span>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$200.00</span>
                                </div>
                                <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="products-cart-subtotal">
                        <span>Subtotal</span>

                        <span class="subtotal">$524.00</span>
                    </div>

                    <div class="products-cart-btn">
                        <a href="#" class="default-btn">Proceed to Checkout</a>
                        <a href="#" class="optional-btn">View Shopping Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shopping Cart Modal -->

    <!-- Start Wishlist Modal -->
    <div class="modal right fade shoppingWishlistModal" id="shoppingWishlistModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class='bx bx-x'></i></span>
                </button>

                <div class="modal-body">
                    <h3>My Wish List (3)</h3>

                    <div class="products-cart-content">
                        <div class="products-cart">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/products/img1.jpg" alt="image"></a>
                            </div>

                            <div class="products-content">
                                <h3><a href="#">{{$product->title}}</a></h3>
                                <span>Blue / XS</span>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$250.00</span>
                                </div>
                                <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                            </div>
                        </div>

                        <div class="products-cart">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/products/img2.jpg" alt="image"></a>
                            </div>

                            <div class="products-content">
                                <h3><a href="#">Causal V-Neck Soft Raglan</a></h3>
                                <span>Blue / XS</span>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$200.00</span>
                                </div>
                                <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                            </div>
                        </div>

                        <div class="products-cart">
                            <div class="products-image">
                                <a href="#"><img src="assets/img/products/img3.jpg" alt="image"></a>
                            </div>

                            <div class="products-content">
                                <h3><a href="#">Hanes Men's Pullover</a></h3>
                                <span>Blue / XS</span>
                                <div class="products-price">
                                    <span>1</span>
                                    <span>x</span>
                                    <span class="price">$200.00</span>
                                </div>
                                <a href="#" class="remove-btn"><i class='bx bx-trash'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="products-cart-btn">
                        <a href="#" class="optional-btn">View Shopping Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Wishlist Modal -->

    <!-- Start Size Guide Modal Area -->
    <div class="modal fade sizeGuideModal" id="sizeGuideModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">


            <img src="/assets/img/tshirtsize.png" class="main-logo" alt="logo" >





{{--       --}}
{{--            <div class="modal-content">--}}
{{--                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">--}}
{{--                    <span aria-hidden="true"><i class="bx bx-x"></i></span>--}}
{{--                </button>--}}

{{--                <div class="modal-sizeguide">--}}
{{--                    <h3>Size Guide</h3>--}}
{{--                    <p>This is an approximate conversion table to help you find your size.</p>--}}

{{--                    <div class="table-responsive">--}}
{{--                        <table class="table table-striped">--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th>Italian</th>--}}
{{--                                <th>Spanish</th>--}}
{{--                                <th>German</th>--}}
{{--                                <th>UK</th>--}}
{{--                                <th>US</th>--}}
{{--                                <th>Japanese</th>--}}
{{--                                <th>Chinese</th>--}}
{{--                                <th>Russian</th>--}}
{{--                                <th>Korean</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}

{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <td>34</td>--}}
{{--                                <td>30</td>--}}
{{--                                <td>28</td>--}}
{{--                                <td>4</td>--}}
{{--                                <td>00</td>--}}
{{--                                <td>3</td>--}}
{{--                                <td>155/75A</td>--}}
{{--                                <td>36</td>--}}
{{--                                <td>44</td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>36</td>--}}
{{--                                <td>32</td>--}}
{{--                                <td>30</td>--}}
{{--                                <td>6</td>--}}
{{--                                <td>0</td>--}}
{{--                                <td>5</td>--}}
{{--                                <td>155/80A</td>--}}
{{--                                <td>38</td>--}}
{{--                                <td>44</td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>38</td>--}}
{{--                                <td>34</td>--}}
{{--                                <td>32</td>--}}
{{--                                <td>8</td>--}}
{{--                                <td>2</td>--}}
{{--                                <td>7</td>--}}
{{--                                <td>160/84A</td>--}}
{{--                                <td>40</td>--}}
{{--                                <td>55</td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>40</td>--}}
{{--                                <td>36</td>--}}
{{--                                <td>34</td>--}}
{{--                                <td>10</td>--}}
{{--                                <td>4</td>--}}
{{--                                <td>9</td>--}}
{{--                                <td>165/88A</td>--}}
{{--                                <td>42</td>--}}
{{--                                <td>55</td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>42</td>--}}
{{--                                <td>38</td>--}}
{{--                                <td>36</td>--}}
{{--                                <td>12</td>--}}
{{--                                <td>6</td>--}}
{{--                                <td>11</td>--}}
{{--                                <td>170/92A</td>--}}
{{--                                <td>44</td>--}}
{{--                                <td>66</td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>44</td>--}}
{{--                                <td>40</td>--}}
{{--                                <td>38</td>--}}
{{--                                <td>14</td>--}}
{{--                                <td>8</td>--}}
{{--                                <td>13</td>--}}
{{--                                <td>175/96A</td>--}}
{{--                                <td>46</td>--}}
{{--                                <td>66</td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>46</td>--}}
{{--                                <td>42</td>--}}
{{--                                <td>40</td>--}}
{{--                                <td>16</td>--}}
{{--                                <td>10</td>--}}
{{--                                <td>15</td>--}}
{{--                                <td>170/98A</td>--}}
{{--                                <td>48</td>--}}
{{--                                <td>77</td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>48</td>--}}
{{--                                <td>44</td>--}}
{{--                                <td>42</td>--}}
{{--                                <td>18</td>--}}
{{--                                <td>12</td>--}}
{{--                                <td>17</td>--}}
{{--                                <td>170/100B</td>--}}
{{--                                <td>50</td>--}}
{{--                                <td>77</td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>50</td>--}}
{{--                                <td>46</td>--}}
{{--                                <td>44</td>--}}
{{--                                <td>20</td>--}}
{{--                                <td>14</td>--}}
{{--                                <td>19</td>--}}
{{--                                <td>175/100B</td>--}}
{{--                                <td>52</td>--}}
{{--                                <td>88</td>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>52</td>--}}
{{--                                <td>48</td>--}}
{{--                                <td>46</td>--}}
{{--                                <td>22</td>--}}
{{--                                <td>16</td>--}}
{{--                                <td>21</td>--}}
{{--                                <td>180/104B</td>--}}
{{--                                <td>54</td>--}}
{{--                                <td>88</td>--}}
{{--                            </tr>--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--     --}}
{{--     --}}
{{--     --}}

        </div>
    </div>
    <!-- End Size Guide Modal Area -->


    <!-- Start print Size Guide Modal Area -->
    <div class="modal fade sizeGuideModal" id="printsize" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">


            <img src="/assets/img/printsize.png" class="main-logo" alt="logo" >




            {{--       --}}
            {{--            <div class="modal-content">--}}
            {{--                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">--}}
            {{--                    <span aria-hidden="true"><i class="bx bx-x"></i></span>--}}
            {{--                </button>--}}

            {{--                <div class="modal-sizeguide">--}}
            {{--                    <h3>Size Guide</h3>--}}
            {{--                    <p>This is an approximate conversion table to help you find your size.</p>--}}

            {{--                    <div class="table-responsive">--}}
            {{--                        <table class="table table-striped">--}}
            {{--                            <thead>--}}
            {{--                            <tr>--}}
            {{--                                <th>Italian</th>--}}
            {{--                                <th>Spanish</th>--}}
            {{--                                <th>German</th>--}}
            {{--                                <th>UK</th>--}}
            {{--                                <th>US</th>--}}
            {{--                                <th>Japanese</th>--}}
            {{--                                <th>Chinese</th>--}}
            {{--                                <th>Russian</th>--}}
            {{--                                <th>Korean</th>--}}
            {{--                            </tr>--}}
            {{--                            </thead>--}}

            {{--                            <tbody>--}}
            {{--                            <tr>--}}
            {{--                                <td>34</td>--}}
            {{--                                <td>30</td>--}}
            {{--                                <td>28</td>--}}
            {{--                                <td>4</td>--}}
            {{--                                <td>00</td>--}}
            {{--                                <td>3</td>--}}
            {{--                                <td>155/75A</td>--}}
            {{--                                <td>36</td>--}}
            {{--                                <td>44</td>--}}
            {{--                            </tr>--}}
            {{--                            <tr>--}}
            {{--                                <td>36</td>--}}
            {{--                                <td>32</td>--}}
            {{--                                <td>30</td>--}}
            {{--                                <td>6</td>--}}
            {{--                                <td>0</td>--}}
            {{--                                <td>5</td>--}}
            {{--                                <td>155/80A</td>--}}
            {{--                                <td>38</td>--}}
            {{--                                <td>44</td>--}}
            {{--                            </tr>--}}
            {{--                            <tr>--}}
            {{--                                <td>38</td>--}}
            {{--                                <td>34</td>--}}
            {{--                                <td>32</td>--}}
            {{--                                <td>8</td>--}}
            {{--                                <td>2</td>--}}
            {{--                                <td>7</td>--}}
            {{--                                <td>160/84A</td>--}}
            {{--                                <td>40</td>--}}
            {{--                                <td>55</td>--}}
            {{--                            </tr>--}}
            {{--                            <tr>--}}
            {{--                                <td>40</td>--}}
            {{--                                <td>36</td>--}}
            {{--                                <td>34</td>--}}
            {{--                                <td>10</td>--}}
            {{--                                <td>4</td>--}}
            {{--                                <td>9</td>--}}
            {{--                                <td>165/88A</td>--}}
            {{--                                <td>42</td>--}}
            {{--                                <td>55</td>--}}
            {{--                            </tr>--}}
            {{--                            <tr>--}}
            {{--                                <td>42</td>--}}
            {{--                                <td>38</td>--}}
            {{--                                <td>36</td>--}}
            {{--                                <td>12</td>--}}
            {{--                                <td>6</td>--}}
            {{--                                <td>11</td>--}}
            {{--                                <td>170/92A</td>--}}
            {{--                                <td>44</td>--}}
            {{--                                <td>66</td>--}}
            {{--                            </tr>--}}
            {{--                            <tr>--}}
            {{--                                <td>44</td>--}}
            {{--                                <td>40</td>--}}
            {{--                                <td>38</td>--}}
            {{--                                <td>14</td>--}}
            {{--                                <td>8</td>--}}
            {{--                                <td>13</td>--}}
            {{--                                <td>175/96A</td>--}}
            {{--                                <td>46</td>--}}
            {{--                                <td>66</td>--}}
            {{--                            </tr>--}}
            {{--                            <tr>--}}
            {{--                                <td>46</td>--}}
            {{--                                <td>42</td>--}}
            {{--                                <td>40</td>--}}
            {{--                                <td>16</td>--}}
            {{--                                <td>10</td>--}}
            {{--                                <td>15</td>--}}
            {{--                                <td>170/98A</td>--}}
            {{--                                <td>48</td>--}}
            {{--                                <td>77</td>--}}
            {{--                            </tr>--}}
            {{--                            <tr>--}}
            {{--                                <td>48</td>--}}
            {{--                                <td>44</td>--}}
            {{--                                <td>42</td>--}}
            {{--                                <td>18</td>--}}
            {{--                                <td>12</td>--}}
            {{--                                <td>17</td>--}}
            {{--                                <td>170/100B</td>--}}
            {{--                                <td>50</td>--}}
            {{--                                <td>77</td>--}}
            {{--                            </tr>--}}
            {{--                            <tr>--}}
            {{--                                <td>50</td>--}}
            {{--                                <td>46</td>--}}
            {{--                                <td>44</td>--}}
            {{--                                <td>20</td>--}}
            {{--                                <td>14</td>--}}
            {{--                                <td>19</td>--}}
            {{--                                <td>175/100B</td>--}}
            {{--                                <td>52</td>--}}
            {{--                                <td>88</td>--}}
            {{--                            </tr>--}}
            {{--                            <tr>--}}
            {{--                                <td>52</td>--}}
            {{--                                <td>48</td>--}}
            {{--                                <td>46</td>--}}
            {{--                                <td>22</td>--}}
            {{--                                <td>16</td>--}}
            {{--                                <td>21</td>--}}
            {{--                                <td>180/104B</td>--}}
            {{--                                <td>54</td>--}}
            {{--                                <td>88</td>--}}
            {{--                            </tr>--}}
            {{--                            </tbody>--}}
            {{--                        </table>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            {{--     --}}
            {{--     --}}
            {{--     --}}

        </div>
    </div>
    <!-- End Size Guide Modal Area -->


    <!-- Start Shipping Modal Area -->
    <div class="modal fade productsShippingModal" id="productsShippingModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class='bx bx-x'></i></span>
                </button>

                <div class="shipping-content">
                    <h3>Free Shipping</h3>
                    <ul>
                        <li>Complimentary ground shipping within 1 to 7 business days</li>
                        <li>In-store collection available within 1 to 7 business days</li>
                        <li>Next-day and Express delivery options also available</li>
                        <li>Purchases are delivered in an orange box tied with a Bolduc ribbon, with the exception of certain items</li>
                        <li>See the delivery FAQs for details on shipping methods, costs and delivery times</li>
                    </ul>

                    <h3>Returns and Exchanges</h3>
                    <ul>
                        <li>Easy and complimentary, within 14 days</li>
                        <li>See conditions and procedure in our return FAQs</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shipping Modal Area -->


</x-site-layout>
