<div>
    <section class="checkout-area ptb-100">
        <div class="container">
            <div class="user-actions">
                <i class='bx bx-log-in'></i>
                <span>Returning customer? <a href="login.html">Click here to login</a></span>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <div class="billing-details">
                        <h3 class="title">Billing Details</h3>

                        <div class="row justify-content-center">
                            @foreach([
                                'First Name' => 'firstName',
                                'Last Name' => 'lastName',
                                'Address' => 'address',
                                'Town / City' => 'city',
                                'Postcode / Zip' => 'zip',
                                'Email Address' => 'email',
                                'Phone' => 'phone'
                            ] as $label => $model)
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>{{ $label }} <span class="required">*</span></label>
                                        <input type="text" class="form-control" wire:model.defer="{{ $model }}">
                                        @error($model) <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            @endforeach


                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="notes" id="notes" cols="30" rows="5" placeholder="Order Notes" class="form-control" wire:model.defer="notes"></textarea>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="order-details">
                        <h3 class="title">Your Order</h3>

                        <div class="order-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Variant</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($carts as $cart)
                                    @foreach($cart->variants as $variant)
                                        <tr>
                                            <td>{{ $variant->product->title }}</td>
                                            <td>{{ $variant->color->name }}, {{ $variant->size->name }}</td>
                                            <td>{{ $variant->pivot->quantity }}</td>
                                            <td>Rs.{{ number_format($variant->selling_price, 2) }}</td>
                                            <td>Rs.{{ number_format($variant->selling_price * $variant->pivot->quantity, 2) }}</td>
                                        </tr>
                                    @endforeach
                                @empty
                                    <tr>
                                        <td colspan="5">Your cart is empty.</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="order-summary">
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <td>Cart Subtotal</td>
                                    <td>Rs.{{ number_format($totalProductAmount, 2) }}</td>
                                </tr>
                                <tr>
                                    <td>Shipping</td>
                                    <td>Rs. 00.00</td>
                                </tr>
                                <tr>
                                    <td>Order Total</td>
                                    <td>Rs.{{ number_format($totalProductAmount, 2) }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="payment-box">
                            <div class="payment-method">
                                <p>
                                    <input type="radio" id="direct-bank-transfer" name="payment_mode" wire:model="payment_mode" value="bank_transfer">
                                    <label for="direct-bank-transfer">Direct Bank Transfer</label>
                                    Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                                </p>

                                <p>
                                    <input type="radio" id="cash-on-delivery" name="payment_mode" wire:model="payment_mode" value="cod">
                                    <label for="cash-on-delivery">Cash on Delivery</label>
                                </p>
                            </div>

                            <button class="default-btn" wire:click="placeOrder">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
