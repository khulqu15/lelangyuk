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
                    <div class="row">
                        <div class="col-9">
                            <input type="text" placeholder="Cari sesuatu" class="form-control px-4 border-0">
                        </div>
                        <div class="col-3">
                            <button class="btn btnm-primary px-4">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="pt-5 pb-3">
                    <button class="btn btnm-primary my-md-0 my-2 mx-2 px-4 py-2">Semua</button>
                    @foreach ($categories as $category)
                        <a href="{{ route('home', ['category' => $category->id]) }}"
                        class="btn {{ $request->category == $category->id ? 'btnm-primary' : 'btnm-light'}} my-md-0 my-2 mx-2 px-4 py-2">{{ $category->name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 my-4">
                <div class="card card-product border-0 cursor-point mb-4">
                    <div class="image">
                        <img src="{{ asset('img/product/1.png') }}" class="w-100 image-fit-card" alt="Produk">
                    </div>
                    <div class="body p-4">
                        <h4 class="viga">Vas bunga</h4>
                        <div>
                            <div class="line-category"></div>
                            <p class="mb-0 d-inline-block textm-gray position-relative" style="top: 3px">Elektronik</p>
                        </div>
                        <div class="mt-4">
                            <h6 class="viga textm-primary">Rp 10.000,-</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
