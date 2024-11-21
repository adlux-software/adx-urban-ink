<div>
    <div>
        <div class="wishlist-compare-btn">
            <button wire:click="toggleWishlist" class="optional-btn">
                <i class='bx bx-heart' style="{{ $isInWishlist ? 'color: red;' : '' }}"></i>
                {{ $isInWishlist ? 'In Wishlist' : 'Add to Wishlist' }}
            </button>
        </div>
    </div>

    @if (session()->has('message'))
        <div class="mt-2 text-green-500">{{ session('message') }}</div>
    @endif

    @if (session()->has('error'))
        <div class="mt-2 text-red-500">{{ session('error') }}</div>
    @endif
</div>
