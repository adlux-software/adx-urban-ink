<div class="products-review-form">


    <li class="accordion-item">
        <a class="accordion-title" href="javascript:void(0)">
            <i class='bx bx-chevron-down'></i>
            Reviews
        </a>

        <div class="accordion-content">
            <div class="products-review-form">
                <h3>Customer Reviews</h3>

                <div class="review-title">
                    <div class="rating">
                        @for ($i = 1; $i <= 5; $i++)
                            <i class="{{ $i <= round($reviews->avg('rating')) ? 'bx bxs-star' : 'bx bx-star' }}"></i>
                        @endfor
                    </div>
                    <p>Based on {{ $reviews->count() }} reviews</p>
                    <a href="#review-form" class="default-btn">Write a Review</a>
                </div>

                <div class="review-comments">
                    @foreach ($reviews as $review)
                        <div class="review-item">
                            <div class="rating">
                                @for ($i = 1; $i <= 5; $i++)
                                    <i class="{{ $i <= $review->rating ? 'bx bxs-star' : 'bx bx-star' }}"></i>
                                @endfor
                            </div>
                            <h3>{{ $review->title }}</h3>
                            <span><strong>{{ $review->name }}</strong> on <strong>{{ $review->created_at->format('M d, Y') }}</strong></span>
                            <p>{{ $review->body }}</p>
                        </div>
                    @endforeach
                </div>

                <div id="review-form" class="review-form">
                    <h3>Write a Review</h3>
                    <form wire:submit.prevent="submitReview">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" wire:model="name" placeholder="Enter your name" class="form-control">
                                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" wire:model="email" placeholder="Enter your email" class="form-control">
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" wire:model="title" placeholder="Enter your review title" class="form-control">
                                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea wire:model="body" cols="30" rows="6" placeholder="Write your comments here" class="form-control"></textarea>
                                    @error('body') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <select wire:model="rating" class="form-control">
                                        <option value="">Select Rating</option>
                                        @for ($i = 1; $i <= 5; $i++)
                                            <option value="{{ $i }}">{{ $i }} Star{{ $i > 1 ? 's' : '' }}</option>
                                        @endfor
                                    </select>

                                    @error('rating') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">Submit Review</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </li>



</div>
