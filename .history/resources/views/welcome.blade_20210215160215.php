@extends('layouts.general')

@section('title', 'Beranda')

@section('content')

<div class="container py-5">
    <div class="row pt-5 pb-4">
        <div class="col-md-6 pt-5">
            <h1 class="viga">Lelang terpercaya hanya di Lelangind</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lobortis ornare dui, quis molestie </p>
            <button class="btn btnm-primary">Lihat Produk</button>
            <button class="btn btnm-light mx-2">Selengkapnya</button>
        </div>
        <div class="col-md-6 py-md-0 py-4 text-center">
            <img src="{{ asset('img/illust/home.png') }}" class="w-75" alt="">
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="viga">Produk Lelangind</h1>
        </div>
    </div>
</div>

<div class="container-fluid mt-5 pt-3 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center position-relative">
                <div class="input-search-home">
                    <form action="{{ route('home') }}" method="GET">
                        <div class="row">
                            <div class="col-9">
                                <input value="{{ request()->get('name') == null ? null : request()->get('name') }}"
                                type="text" name="name" placeholder="Cari sesuatu" class="form-control px-4 border-0">
                            </div>
                            <div class="col-3">
                                @if (Request::get('name') == null)
                                    <button type="submit" class="btn btnm-primary px-4">
                                        <i class="fas fa-search"></i>
                                    </button>
                                @else
                                    <a href="{{ route('home') }}" type="button" class="btn btnm-light px-4">
                                        <i class="fas fa-undo"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
                <div class="pt-5 pb-3">
                    <a href="{{ route('home') }}" class="btn {{ request()->get('category') == null ? 'btnm-primary' : 'btnm-light' }} btnm-primary my-md-0 my-2 mx-2 px-4 py-2">Semua</a>
                    @foreach ($categories as $category)
                        <a href="{{ route('home', ['category' => $category->id]) }}"
                        class="btn {{ request()->get('category') == $category->id ? 'btnm-primary' : 'btnm-light' }} my-md-0 my-2 mx-2 px-4 py-2">{{ $category->name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row my-4">
            @foreach ($products as $product)
            <div class="col-md-4 col-sm-6 my-2">
                <div class="card card-product border-0 cursor-point mb-4">
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
                        <button class="btn viga btnm-primary py-3 px-5 position-absolute" style="right:0; bottom: -16px">Lebih Detail</button>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-12 text-center py-4">
                <button class="btn btnm-primary px-5 py-3 viga">Lihat Semua Produk</button>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5 bg-hammer-bottom">
    <div class="row">
        <div class="col-md-8 offset-md-2 text-center">
            <img src="{{ asset('img/logo-white.png') }}" class="d-inline-block" width="60px" alt="Logo">
            <h2 class="viga d-inline-block text-white mb-0 position-relative" style="top: 12px">Lelangind</h2>
        </div>
    </div>
</div>

@endsection
