
<div>

    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ $category_name }}</h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>{{ $category_name }}</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="products-area pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-12">
                    <div class="woocommerce-widget-area">


                        <div class="woocommerce-widget size-list-widget">
                            <h3 class="woocommerce-widget-title">Collections</h3>

                            @if($categories->count() > 0)
                                <ul class="size-list-row">
                                    @foreach($categories as $category)
                                        <li>
                                            <a wire:click="selectCategory({{ $category->id }})"
                                               class="{{ $selected_category_id === $category->id ? 'selected' : '' }}">
                                                {{ $category->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>


                        <style>
                            .selected {
                                font-weight: bold;
                                color: #47A4AD; /* Bootstrap primary color */
                            }
                        </style>


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
                                        <li wire:click="selectSize({{ $size->id }})" class="{{ $selected_size_id === $size->id ? 'selected' : '' }}">
                                            <a>{{ $size->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <style>
                            .selected {
                                font-weight: bold;
                                color: #47A4AD; /* Bootstrap primary color */
                            }
                        </style>

                        @if($colors && $colors->count() > 0)
                            <div class="woocommerce-widget color-list-widget">
                                <h3 class="woocommerce-widget-title">Color</h3>

                                <ul class="color-list-row">
                                    @foreach($colors as $color)
                                        <li wire:click="selectColor({{ $color->id }})" class="color-list-item {{ $selected_color_id === $color->id ? 'selected' : '' }}">
                                            <a title="{{ $color->name }}" class="color-box" style="background-color: {{ $color->code }}">
                                                <span class="sr-only">{{ $color->name }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <style>
                            .selected {
                                font-weight: bold;
                                color: #47A4AD; /* Bootstrap primary color */
                            }
                        </style>




                        {{--                        <div class="woocommerce-widget aside-trending-widget">--}}
                        {{--                            <div class="aside-trending-products">--}}
                        {{--                                <img src="assets/img/offer-bg.jpg" alt="image">--}}

                        {{--                                <div class="category">--}}
                        {{--                                    <h3>Top Trending</h3>--}}
                        {{--                                    <span>Spring/Summer 2024 Collection</span>--}}
                        {{--                                </div>--}}
                        {{--                                <a href="products-right-sidebar.html" class="link-btn"></a>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
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
{{--                                            <a href="#" class="icon-view-one">--}}
{{--                                                <span></span>--}}
{{--                                            </a>--}}

{{--                                            <a href="#" class="icon-view-two">--}}
{{--                                                <span></span>--}}
{{--                                                <span></span>--}}

{{--                                            </a>--}}

                                            <a href="#" class="icon-view-three active">
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

                    <div id="products-collections-filter" class="row products-col-three">

                        @foreach($product_shirts as $product)
                            <div class="col-lg-6 col-md-6 col-sm-6 products-col-item">

                                <div class="single-products-box">

                                    <div class="products-image">


                                        @if($product->hasMedia('featured'))
                                            <a href="{{ route('product.show' , $product->slug) }}">
                                                <img src="{{ $product->getFirstMediaURL('featured', 'thumb') }}" alt="image" class="main-image">
                                                <img src="{{ $product->getFirstMediaURL('featured', 'thumb') }}" alt="image" class="hover-image">
                                            </a>
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
                                                {{--                                                <li>--}}
                                                {{--                                                    <div class="compare-btn">--}}
                                                {{--                                                        <a href="compare.html">--}}
                                                {{--                                                            <i class='bx bx-refresh'></i>--}}
                                                {{--                                                            <span class="tooltip-label">Compare</span>--}}
                                                {{--                                                        </a>--}}
                                                {{--                                                    </div>--}}
                                                {{--                                                </li>--}}
                                                {{--                                                <li>--}}
                                                {{--                                                    <div class="quick-view-btn">--}}
                                                {{--                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView">--}}
                                                {{--                                                            <i class='bx bx-search-alt'></i>--}}
                                                {{--                                                            <span class="tooltip-label">Quick View</span>--}}
                                                {{--                                                        </a>--}}
                                                {{--                                                    </div>--}}
                                                {{--                                                </li>--}}
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="products-content">
                                        <h3><a href="{{ route('product.show' , $product->slug) }}">{{ $product->title }}</a></h3>

                                        @if($product->variants->count() > 0)
                                            <div class="price">
                                                <span class="old-price">Rs. {{ number_format($product->variants?->first()->mrp, 2) }}</span>
                                                <span class="new-price">Rs. {{ number_format($product->variants?->first()->selling_price, 2) }}</span>
                                            </div>
                                        @endif



                                        @php
                                            $details = \App\Models\Review::all();
                                            $details = $details->where('product_id', $product->id);
                                            $items = $details->first();
                                        @endphp


                                        <div class="products-review">
                                            <div class="star-rating" style="margin-right: 4px">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <i class="{{ $i <= round($details->avg('rating')) ? 'bx bxs-star' : 'bx bx-star' }}"></i>
                                                @endfor
                                            </div>
                                        </div>

                                        <a href="{{ route('product.show' , $product->slug) }}" class="add-to-cart">View</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="mt-3 items-center col-span-3">
                            {{ $product_shirts->links('pagination::bootstrap-4') }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Products Area -->

    <style>
        .pagination {
            display: flex;
            justify-content: center;
            padding: 1rem 0;
        }

        .pagination .page-item .page-link {
            color: #47A4AD; /* Bootstrap primary color */
        }

        .pagination .page-item.active .page-link {
            background-color: #47A4AD;
            border-color: #47A4AD;
            color: #fff;
        }

        .pagination .page-item .page-link:hover {
            background-color: #47A4AD;
            border-color: #47A4AD;
            color: #fff;
        }
    </style>

</div>
