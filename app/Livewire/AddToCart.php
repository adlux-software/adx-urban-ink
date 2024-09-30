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

        if (! request()->session()->has('cart_session_id')) {
            $session_id = (string) Uuid::uuid4();
            request()->session()->put('cart_session_id', $session_id);
        }

        $session_id = request()->session()->get('cart_session_id');

        $user = Auth::user();

        $cart = (new Cart())
            ->where('session_id', $session_id)
            ->where('user_id', $user ? $user->id : null)
            ->where('is_paid', 0);

        if ($cart->count() > 0) {
            $cart_status = 'update';
            $cart = $cart->get()->first();
        } else {

            if ($user) {
                $cart = (new Cart())
                    ->where('user_id', $user->id)
                    ->where('is_paid', 0);

                if ($cart && $cart->count() > 0) {
                    $cart_status = 'update';
                    $cart = $cart->get()->first();
                }
            }
        }

        if ($cart_status === 'update' && isset($cart) && $cart instanceof Cart) {
            if ($cart->variants && $cart->variants->count() && $cart->variants->pluck('id')->search($this->selected_variant->id) > -1) {
                $cart->variants()->detach($this->selected_variant->id);
            }
        } elseif ($cart_status === 'create') {
            $cart = (new Cart())->create([
                'session_id' => $session_id,
                'user_id' => $user->id ?? null,
                'is_paid' => 0,
            ]);
        }

        if (isset($cart) && $cart instanceof Cart) {
            $price = $this->selected_variant->selling_price * $this->selected_quantity;

            $cart->variants()->attach($this->selected_variant->id, [
                'product_id' => $this->selected_variant->product_id,
                'price' => $price,
                'quantity' => $this->selected_quantity,
            ]);

            $this->show_success_message = true;

            // Optionally, you can reset other states or hide other messages here
            $this->success = 'Product added to cart successfully!';
        }

        $this->cart = calculate_cart_total($cart->id);
        $this->selected_quantity = 1;
        $this->selected_variant = [];

        $this->dispatch('CartAddedUpdated');

    }

    public function render()
    {
        return view('livewire.add-to-cart');
    }
}
