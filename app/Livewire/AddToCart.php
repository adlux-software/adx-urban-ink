<?php

namespace App\Livewire;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Ramsey\Uuid\Uuid;

class AddToCart extends Component
{
    public $product;
    public $variants;
    public $colors = [];
    public $sizes = [];
    public $selected_variant = [];
    public $selected_color_id = null;
    public $selected_size_id = null;
    public $selected_quantity = 1;
    public $success = false;
    public $warning = false;
    public $cart;
    public $redirectTo;
    public $show_success_message ;

    public function mount()
    {
        if ($this->product) {
            if ($this->product->variants->count() > 0) {
                $this->variants = $this->product->variants;

                foreach ($this->variants as $variant) {
                    $this->colors[$variant->color_id] = [
                        'name' => $variant->color->name,
                        'code' => $variant->color->code,
                    ];

                    $this->sizes[$variant->size_id] = [
                        'name' => $variant->size->name,
                    ];
                }
            }
        }
    }

    public function selectColor($key)
    {
        $this->selected_color_id = $key;
        $this->selectVariant();
    }

    public function selectSize($key)
    {
        $this->selected_size_id = $key;
        $this->selectVariant();
    }

    public function selectVariant()
    {
        // This only gets triggered with both color and size are selected
        if ($this->selected_size_id && $this->selected_color_id) {
            $this->selected_variant = $this->variants
                ->where('color_id', $this->selected_color_id)
                ->where('size_id', $this->selected_size_id)
                ->first();
        }
    }

    public function increaseQuantity()
    {
        $this->selected_quantity++;
    }

    public function reduceQuantity()
    {
        if ($this->selected_quantity > 1) {
            $this->selected_quantity--;
        }
    }

    public function addToCart()
    {
        $this->success = false;
        $this->warning = false;

        $cart_status = 'create';

        // Always create a session ID if it doesn't exist
        if (! request()->session()->has('cart_session_id')) {
            $session_id = (string) Uuid::uuid4();
            request()->session()->put('cart_session_id', $session_id);
        }

        // Get the session ID
        $session_id = request()->session()->get('cart_session_id');

        // Get the authenticated user
        $user = Auth::user();

        // Check if there's already an active cart for the session or user
        $cart = Cart::where(function ($query) use ($session_id, $user) {
            $query->where('session_id', $session_id)
                ->orWhere('user_id', $user ? $user->id : null);
        })
            ->where('is_paid', 0)
            ->first(); // Use first to get a single record

        if ($cart) {
            $cart_status = 'update';
        } else {
            // If no cart is found, we create a new one
            $cart = Cart::create([
                'session_id' => $session_id,
                'user_id' => $user ? $user->id : null,
                'is_paid' => 0,
            ]);
        }

        // Once we have the cart, we proceed to manage variants
        if ($cart_status === 'update' && isset($cart) && $cart instanceof Cart) {
            // Detach the variant if it already exists in the cart
            if ($cart->variants && $cart->variants->count() && $cart->variants->pluck('id')->search($this->selected_variant->id) > -1) {
                $cart->variants()->detach($this->selected_variant->id);
            }
        }

        // Add the selected variant to the cart
        if (isset($cart) && $cart instanceof Cart) {
            $price = $this->selected_variant->selling_price * $this->selected_quantity;

            // Attach the selected variant to the cart with its details
            $cart->variants()->attach($this->selected_variant->id, [
                'product_id' => $this->selected_variant->product_id,
                'price' => $price,
                'quantity' => $this->selected_quantity,
            ]);

            $this->show_success_message = true;
            $this->success = 'Product added to cart successfully!';
        }

        // Recalculate the cart total and reset selected values
        $this->cart = calculate_cart_total($cart->id);
        $this->selected_quantity = 1;
        $this->selected_variant = [];

        // Dispatch the event to update the cart
        $this->dispatch('CartAddedUpdated');
    }

    public function render()
    {
        return view('livewire.add-to-cart');
    }
}
