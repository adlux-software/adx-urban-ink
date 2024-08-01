<div>
    <h3>{{$product->title}}</h3>
    @if($product->variants->count() > 0)
        <div class="price">
            <span class="new-price">{{ number_format($product->variants?->first()->selling_price, 2) }}</span>
            <span class="old-price">{{ number_format($product->variants?->first()->mrp, 2) }}</span>
        </div>
    @endif
    <div class="products-review">
        <div class="rating">
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
            <i class='bx bx-star'></i>
        </div>
        <a href="#" class="rating-count">3 reviews</a>
    </div>

    <ul class="products-info">
        <li><span>Availability:</span> <a href="#">In stock ({{$product->variants->sum('quantity')}} items)</a></li>
        <li><span>Products Type:</span> <a href="#">{{$product->category?->name}}</a></li>
    </ul>

    <div class="products-color-switch">
        <span>Color:</span>
        <ul>
            @foreach($colors as $key => $color)
                <li>
                    <a
                        wire:click="selectColor({{ $key }})"
                        type="button" style="background-color: {{ $color['code'] }}">
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="products-size-wrapper">
        <span>Size:</span>

        <ul>
            @foreach($sizes as $key => $size)
                <li>
                    <a
                        wire:click="selectSize({{ $key }})"
                        type="button">{{ $size['name'] }}
                    </a>
                </li>
            @endforeach

        </ul>
    </div>

    <div class="products-info-btn">
        <a href="#" data-bs-toggle="modal" data-bs-target="#sizeGuideModal"><i class='bx bx-crop'></i> Size guide</a>
        <a href="#" data-bs-toggle="modal" data-bs-target="#productsShippingModal"><i class='bx bxs-truck' ></i> Shipping</a>
        <a href="contact.html"><i class='bx bx-envelope'></i> Ask about this products</a>
    </div>

    @if($selected_variant)

        <div class="products-add-to-cart">
            <div class="input-counter">
                <span
                    wire:click="reduceQuantity"
                    class="minus-btn">
                    <i class='bx bx-minus'></i>
                </span>
                <input
                    wire:model="selected_quantity"
                    type="text">
                <span
                    wire:click="increaseQuantity"
                    class="plus-btn">
                    <i class='bx bx-plus'></i>
                </span>
            </div>

            <button
                wire:click="addToCart"
                type="button" class="default-btn">
                <i class="fas fa-cart-plus"></i>
                Add to Cart
            </button>
        </div>

        <div class="buy-checkbox-btn">
            <div class="item">
                <input class="inp-cbx" id="cbx" type="checkbox">
                <label class="cbx" for="cbx">
                    <span>
                        <svg width="12px" height="10px" viewbox="0 0 12 10">
                            <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                        </svg>
                    </span>
                    <span>I agree with the terms and conditions</span>
                </label>
            </div>

            <div class="item">
                <a href="#" class="default-btn">Buy it now!</a>
            </div>
        </div>

    @endif

    <div class="wishlist-compare-btn">
        <a href="#" class="optional-btn"><i class='bx bx-heart'></i> Add to Wishlist</a>
        <a href="#" class="optional-btn"><i class='bx bx-refresh'></i> Add to Compare</a>
    </div>

    @if($success)
        <div class="alert alert-success mt-4" role="alert">
            {{ $success }}
        </div>
    @endif



</div>
