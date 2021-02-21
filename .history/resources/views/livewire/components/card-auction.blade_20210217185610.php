<div>
    <div class="row">
        <div class="col-md-12">
            <div class="p-3">
                <div class="d-inline-block">
                    <div class="avatar-sm">
                        <img class="image-fit-card" src="{{ asset('img/user/valen.png') }}" alt="{{ Auth::user()->name }}">
                    </div>
                </div>
                <div class="d-inline-block ml-3">
                    <p class="mb-0 textm-gray text-md">Anda telah membuat penawaran</p>
                    <h5 class="viga textm-primary mb-0">Rp {{ number_format($auction->price) }},-</h5>
                    <p>{{ $auction->product->name }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
