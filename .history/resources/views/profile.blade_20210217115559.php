@extends('layouts.general')

@section('title', Auth::user()->name)

@section('content')
    @if (Auth::check())
    <div class="container-fluid pt-5 pb-4">
        <div class="container pt-5">
            <div class="row pt-5">
                <div class="col-md-4">
                    <div class="card position-sticky sticky-top border-0 mb-4 shadow-smooth text-center shadow px-4 pt-5 pb-3 position-relative"
                        style="top: 120px; z-index: 0">
                        <div class="position-absolute cursor-point ellipsis-menu-right">
                            <i class="fas fa-ellipsis-h"></i>
                        </div>
                        <div class="avatar-profile mt-3">
                            <img src="{{ asset('img/user/valen.png') }}" class="image-fit-card rad" alt="{{ Auth::user()->name }}">
                        </div>
                        <h4 class="viga mt-4 mb-0">{{ Auth::user()->name }}</h4>
                        <p class="textm-gray">{{ Auth::user()->email }}</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <button class="btn viga btnm-primary" id="btn-product" onclick="toggleView('product')">Produk yang disukai</button>
                    <button class="btn viga btnm-light mx-2" id="btn-auction" onclick="toggleView('auction')">Catatan Lelang</button>
                    <div class="row mt-3" id="product-content">
                        @foreach ($user->like as $product)
                        <div class="col-md-6">
                            <livewire:components.card-product :product="$product->product">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleView(menu) {
            if(menu == 'product') {
                $('#product-content').removeClass('d-none')
                $('#auction-content').addClass('d-none')
                $('#btn-auction').addClass('btnm-light').removeClass('btnm-primary');
                $('#btn-product').removeClass('btnm-light').addClass('btnm-primary');
            } else {
                $('#product-content').addClass('d-none')
                $('#auction-content').removeClass('d-none')
                $('#btn-product').addClass('btnm-light').removeClass('btnm-primary');
                $('#btn-auction').removeClass('btnm-light').addClass('btnm-primary');
            }
        }
    </script>
    @endif
@endsection
