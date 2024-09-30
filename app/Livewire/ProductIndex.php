<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Colors;
use App\Models\Product;
use App\Models\Size;
use Livewire\Attributes\Url;
use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;


class ProductIndex extends Component
{
    public $categories = [];
    public $sizes = [];

    public $colors = [];

    public $selected_category_id = null;

    #[Url(as: 'category', history: true)]
    public $category_id = null;

    #[Url(as: 'size', history: true)]
    public $selected_size_id;

    #[Url(as: 'color', history: true)]
    public $selected_color_id;

    public $price = 5000;

    public $category_name = 'All Products';

    protected $query;
    public function mount()
    {
        $this->categories = (new Category())
            ->where('is_active', 1) // update to status later
            ->get();

        $this->sizes = (new Size())
            ->where('is_active', 1) // update to status later
            ->get();

        $this->colors = (new Colors()) // todo: change the name to singular
            ->where('is_active', 1) // update to status later
            ->get();

    }


    public function selectCategory($category_id)
    {
        $this->selected_category_id = $category_id;
        $this->category_id = $category_id;
    }

    public function selectSize($size_id)
    {
        $this->selected_size_id = $size_id;
    }

    public function selectColor($color_id)
    {
        $this->selected_color_id = $color_id;
    }

    public function productQuery()
    {
        $query = (new Product())
            ->where('status', 1)
            ->with('variants', 'media');

        if ($this->category_id) {
            $query->where('category_id', $this->category_id);

            // gets the name of the category
            $this->category_name = Category::find($this->category_id)->name;
        }

        if ($this->selected_size_id) {
            $query->whereHas('variants', function ($query) {
                $query->where('size_id', $this->selected_size_id);
            });
        }

        if ($this->selected_color_id) {
            $query->whereHas('variants', function ($query) {
                $query->where('color_id', $this->selected_color_id);
            });
        }

        if ($this->price) {
            $query->whereHas('variants', function ($query) {
                $query->where('selling_price', '<=', $this->price);
            });
        }

        return $query;
    }

    public function render()
    {

        return view('livewire.product-index', [
            'productss' => $this->productQuery()->paginate(10),
        ]);
    }
}
