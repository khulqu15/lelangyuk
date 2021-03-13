<div>
    <div class="row">
        <div class="col-md-12">
            <div class="py-3 px-4 card-auction cursor-point" onclick="window.location.href = '{{ route('transaction.create', ['auctionId' => $auction->id]) }}'">
                <div class="d-inline-block">
                    <div class="avatar-md mr-2">
                        <img class="image-fit-card" src="{{ Auth::user()->avatar == null ? asset('img/user/avatar.png') : asset('img/user/'.Auth::user()->avatar)  }}" alt="{{ Auth::user()->name }}">
                    </div>
                </div>
                <div class="d-inline-block">
                    <p class="mb-0 textm-gray text-sm">Anda telah membuat penawaran</p>
                    <h5 class="viga textm-primary mb-0">Rp {{ number_format($auction->price) }},-</h5>
                    <p class="mb-0">{{ $auction->product->name }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
