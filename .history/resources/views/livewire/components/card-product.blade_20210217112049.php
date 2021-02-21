<div>
    <div class="card card-product border-0 cursor-point mb-4">
        @if (Auth::check())
        <div class="like" wire:click="like({{ $product->id }}, {{ Auth::id() }})">
            <i class="far fa-heart"></i>
        </div>
        @else
        <div class="like" onclick="window.location = '{{ route('login') }}'"><i class="far fa-heart"></i></div>
        @endif
        <div class="image">
            <img src="{{ asset('img/product/'.$product->picture) }}" class="w-100 image-fit-card" alt="Produk">
        </div>
        <div class="body p-4">
            <h4 class="viga">{{ $product->name }}</h4>
            <div>
                <div class="line-category"></div>
                <p class="mb-0 d-inline-block textm-gray position-relative" style="top: 3px">{{ $product->category->name }}</p>
            </div>
            <div class="mt-4">
                <h5 class="viga textm-primary">Rp {{ number_format($product->price) }},-</h5>
            </div>
            <button onclick="window.location = '{{ route('product', $product->id) }}'" class="btn viga btnm-primary py-3 px-5 position-absolute" style="right:0; bottom: -16px">Lebih Detail</button>
        </div>
    </div>
</div>
