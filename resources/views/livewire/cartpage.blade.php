<div>

    <!-- Start Cart Area -->
    <section class="cart-area ptb-100">
        <div class="container">
            <div class="cart-table table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Name</th>
                        <th scope="col">Unit Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                    </tr>
                    </thead>

                    <tbody>


                    @foreach($cart->products as $product)
                    <tr>
                        <td class="product-thumbnail">
                            <a href="#">
                                @if($product->hasMedia('featured'))
                                   <img src="{{ $product->getFirstMediaURL('featured', 'thumb') }}" alt="image">
                                @endif
                            </a>
                        </td>

                        <td class="product-name">
                            <a href="#">{{$product->title}}</a>

                            @php
                                $variant_item = \App\Models\Variant::where('id', $product->pivot->variant_id)->first();
                            @endphp

                            <ul>
                                <li>Color: <span>{{$variant_item->color->name}}</span></li>
                                <li>Size: <span>{{$variant_item->size->name}}</span></li>
                                    {{-- <li>Material: <span>Cotton</span></li> --}}
                            </ul>
                        </td>

                        <td class="product-price">
                            <span class="unit-amount">Rs.{{ number_format($variant_item->selling_price, 2) }}</span>
                        </td>
                        <td class="product-quantity">
                            <div class="input-counter">
                                <span class="minus-btn" wire:click="decrementQuantity({{ $product->pivot->id }})"> <i class='bx bx-minus'></i></span>
                                <input type="text" min="1" value="{{$product->pivot->quantity}}">
                                <span class="plus-btn" wire:click="incrementQuantity({{$product->pivot->id}})"><i class='bx bx-plus'></i></span>
                            </div>
                        </td>

                        <td class="product-subtotal">
                            <span class="subtotal-amount">Rs.{{ number_format($product->pivot->price, 2) }}</span>
                            <a type="button" wire:click="removeProduct({{ $product->pivot->id }})" class="remove"><i class='bx bx-trash'></i></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="cart-buttons">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-7 col-sm-7 col-md-7">
                        <a href="#" class="optional-btn">Continue Shopping</a>
                    </div>

                    <div class="col-lg-5 col-sm-5 col-md-5 text-end">
                        <a href="#" class="default-btn">Update Cart</a>
                    </div>
                </div>
            </div>

            <div class="cart-totals">
                <h3>Cart Totals</h3>

                <ul>
                    <li>Subtotal <span>$800.00</span></li>
                    <li>Shipping <span>$30.00</span></li>
                    <li>Total <span>RS.{{ number_format($cart->total, 2) }}</span></li>
                </ul>

                <a href="#" class="default-btn">Proceed to Checkout</a>
            </div>

        </div>
    </section>
    <!-- End Cart Area -->
</div>
