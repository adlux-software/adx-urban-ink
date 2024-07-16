<?php


use App\Models\Cart;

if (!function_exists('calculate_cart_total')) {
    function calculate_cart_total($cart_id)
    {
        try {
            $cart = (new Cart())->findOrFail($cart_id);

            // calculate total
            $total = 0;

            // This is only done for the product's main price. Not for the options prices.
            if ($cart->variants && $cart->variants->count()) {
                foreach ($cart->variants as $pivot_variant) {
                    $total += $pivot_variant->pivot->price;
                }
            }

            // update cart total
            $cart->update([
                'shipping_cost' => 0,
                'total' => $total,
            ]);

            // reload the cart
            return (new Cart())->find($cart->id);

        } catch (\Exception $exception) {
            abort(500, $exception->getMessage());
        }
    }
}
