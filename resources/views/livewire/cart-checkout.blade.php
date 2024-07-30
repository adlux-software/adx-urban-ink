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

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>First Name <span class="required">*</span></label>
                                        <input type="text" class="form-control" wire:model="firstName">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Last Name <span class="required">*</span></label>
                                        <input type="text" class="form-control" wire:model="lastName">
                                    </div>
                                </div>


                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>Address <span class="required">*</span></label>
                                        <input type="text" class="form-control"  wire:model="address">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>Town / City <span class="required">*</span></label>
                                        <input type="text" class="form-control" wire:model="city">
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Postcode / Zip <span class="required">*</span></label>
                                        <input type="text" class="form-control" wire:model="zip">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Email Address <span class="required">*</span></label>
                                        <input type="email" class="form-control" wire:model="email">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Phone <span class="required">*</span></label>
                                        <input type="text" class="form-control" wire:model="phone">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="create-an-account">
                                        <label class="form-check-label" for="create-an-account">Create an account?</label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="ship-different-address">
                                        <label class="form-check-label" for="ship-different-address">Ship to a different address?</label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="notes" id="notes" cols="30" rows="5" placeholder="Order Notes" class="form-control"></textarea>
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

                                    </thead>

                                    <tbody>

                                    <tr>
                                        <td class="order-subtotal">
                                            <span>Cart Subtotal</span>
                                        </td>

                                        <td class="order-subtotal-price">
                                            <span class="order-subtotal-amount">$800.00</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="order-shipping">
                                            <span>Shipping</span>
                                        </td>

                                        <td class="shipping-price">
                                            <span>$30.00</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="total-price">
                                            <span>Order Total</span>
                                        </td>

                                        <td class="product-subtotal">
                                            <span class="subtotal-amount">Rs.{{$this->totalProductAmount}}</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="payment-box">
                                <div class="payment-method">
                                    <p>
                                        <input type="radio" id="direct-bank-transfer" name="radio-group" wire:model="payment_mode" value="bank_transfer">
                                        <label for="direct-bank-transfer">Direct Bank Transfer</label>
                                        Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                                    </p>

                                    <p>
                                        <input type="radio" id="cash-on-delivery" name="radio-group" wire:model="payment_mode" value="cod">
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
