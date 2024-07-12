<?php

namespace App\Livewire;

use Livewire\Component;

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

    public function mount()
    {
        if($this->product) {

            if($this->product->variants->count() > 0){

                $this->variants = $this->product->variants;

                foreach($this->variants as $variant) {

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
        if($this->selected_size_id && $this->selected_color_id) {

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

        if($this->selected_quantity > 1) {
            $this->selected_quantity--;
        }

    }

    public function addToCart()
    {
        dd('Add to cart');
    }


    public function render()
    {
        return view('livewire.add-to-cart');
    }
}
