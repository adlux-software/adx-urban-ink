<div>
    <section class="products-area pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-12">
                    <div class="woocommerce-widget-area">


                        <div class="woocommerce-widget collections-list-widget">
                            <h3 class="woocommerce-widget-title">Collections</h3>

                            @if($categories->count() > 0)
                                <ul class="collections-list-row">
                                    @foreach($categories as $category)
                                        <li>
                                            <a wire:click="selectCategory({{ $category->id }})">
                                                {{ $category->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>

                        <div class="woocommerce-widget price-list-widget">
                            <h3 class="woocommerce-widget-title">Price</h3>

                            <div class="collection-filter-by-price">
                                <input  wire:model.live="price"
                                        type="range"
                                        min="1"
                                        max="10000"
                                        value="500" class="slider text-flamingo-400" id="priceRange">

{{--                                <input--}}
{{--                                    class="js-range-of-price" type="text" data-min="0" data-max="10000" name="filter_by_price" data-step="100">--}}

                            </div>
                            <div class="flex justify-between items-center mt-6">
                                <p class="text-base leading-5 font-Questrial text-Gray-scale-800">
                                    Price: Rs. {{ number_format($price, 2) }}
                                </p>
                            </div>
                        </div>

                        @if($sizes && $sizes->count() > 0)
                            <div class="woocommerce-widget size-list-widget">
                                <h3 class="woocommerce-widget-title">Size</h3>

                                <ul class="size-list-row">
                                    @foreach($sizes as $size)
                                        <li
                                            wire:click="selectSize({{ $size->id }})">
                                            <a>{{ $size->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if($colors && $colors->count() > 0)
                            <div class="woocommerce-widget color-list-widget">
                                <h3 class="woocommerce-widget-title">Color</h3>

                                <ul class="color-list-row">
                                    @foreach($colors as $color)
                                        <li
                                            wire:click="selectColor({{ $color->id }})">
                                            <a title="{{ $color->name }}"
                                                style="background-color: {{ $color->code }}">
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif



                        <div class="woocommerce-widget aside-trending-widget">
                            <div class="aside-trending-products">
                                <img src="assets/img/offer-bg.jpg" alt="image">

                                <div class="category">
                                    <h3>Top Trending</h3>
                                    <span>Spring/Summer 2024 Collection</span>
                                </div>
                                <a href="products-right-sidebar.html" class="link-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="products-filter-options">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-4 col-md-4">
                                <div class="d-lg-flex d-md-flex align-items-center">
                                    <span class="sub-title d-lg-none"><a href="#" data-bs-toggle="modal" data-bs-target="#productsFilterModal"><i class='bx bx-filter-alt'></i> Filter</a></span>

                                    <span class="sub-title d-none d-lg-block d-md-block">View:</span>

                                    <div class="view-list-row d-none d-lg-block d-md-block">
                                        <div class="view-column">
                                            <a href="#" class="icon-view-one">
                                                <span></span>
                                            </a>

                                            <a href="#" class="icon-view-two active">
                                                <span></span>
                                                <span></span>
                                            </a>

                                            <a href="#" class="icon-view-three">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </a>

                                            <a href="#" class="view-grid-switch">
                                                <span></span>
                                                <span></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

{{--                            <div class="col-lg-4 col-md-4">--}}
{{--                                <p>Showing 1 – {{ $products->count() }} of {{ $totalProducts }}</p>--}}



{{--                            </div>--}}

                            <div class="col-lg-4 col-md-4">
                                <div class="products-ordering-list">
                                    <select>
                                        <option>Sort by Price: Low to High</option>
                                        <option>Default Sorting</option>
                                        <option>Sort by Popularity</option>
                                        <option>Sort by Average Rating</option>
                                        <option>Sort by Latest</option>
                                        <option>Sort by Price: High to Low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="products-collections-filter" class="row">

                        @foreach($products as $product)
                            <div class="col-lg-6 col-md-6 col-sm-6 products-col-item">
                                <div class="single-products-box">
                                    <div class="products-image">
                                        <a href="products-type-1.html">
                                            @if($product->hasMedia('featured'))
                                                <a href="{{ route('product.show' , $product->slug) }}"><img src="{{ $product->getFirstMediaURL('featured', 'thumb') }}" class="main-image" alt="image"></a>
                                                <a href="{{ route('product.show' , $product->slug) }}"><img src="{{ $product->getFirstMediaURL('featured', 'thumb') }}" class="hover-image" alt="image"></a>
                                            @endif
                                        </a>

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
                                        <h3><a href="products-type-1.html">{{ $product->title }}</a></h3>

                                        @if($product->variants->count() > 0)
                                            <div class="price">
                                                <span class="old-price">Rs. {{ number_format($product->variants?->first()->mrp, 2) }}</span>
                                                <span class="new-price">Rs. {{ number_format($product->variants?->first()->selling_price, 2) }}</span>
                                            </div>
                                        @endif
                                        <div class="star-rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <a href="cart.html" class="add-to-cart">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="mt-3 items-center col-span-3">
                            {{ $products->links() }}
                        </div>
                    </div>

{{--                    <div class="pagination-area text-center">--}}
{{--                        <a href="#" class="prev page-numbers"><i class='bx bx-chevron-left'></i></a>--}}
{{--                        <span class="page-numbers current" aria-current="page">1</span>--}}
{{--                        <a href="#" class="page-numbers">2</a>--}}
{{--                        <a href="#" class="page-numbers">3</a>--}}
{{--                        <a href="#" class="page-numbers">4</a>--}}
{{--                        <a href="#" class="page-numbers">5</a>--}}
{{--                        <a href="#" class="next page-numbers"><i class='bx bx-chevron-right'></i></a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- End Products Area -->
</div>
