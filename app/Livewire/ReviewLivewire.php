<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Review;

class ReviewLivewire extends Component
{
    public $product_id;
    public $name;
    public $email;
    public $title;
    public $body;
    public $rating;
    public $reviews;
    public $showForm = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'title' => 'required|string|max:255',
        'body' => 'required|string',
        'rating' => 'required|integer|min:1|max:5',
    ];

    public function mount($productId)
    {
        $this->product_id = $productId;
        $this->loadReviews();
    }

    public function loadReviews()
    {
        $this->reviews = Review::where('product_id', $this->product_id)->latest()->get();
    }

    public function submitReview()
    {
        $this->validate();

        Review::create([
            'product_id' => $this->product_id,
            'name' => $this->name,
            'email' => $this->email,
            'title' => $this->title,
            'body' => $this->body,
            'rating' => $this->rating,
        ]);

        $this->reset(['name', 'email', 'title', 'body', 'rating']);
        $this->loadReviews();
        session()->flash('success', 'Your review has been submitted.');
    }

    public function render()
    {
        return view('livewire.review-livewire');
    }
}
