@extends('layouts.general')

@section('title', 'Beranda')

@section('content')

    <div class="container py-5">
        <div class="row pt-5">
            <div class="col-md-6 pt-5 mt-2">
                <h1 class="viga mb-4">Lelang terpercaya hanya di Lelangind</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem aliquid quo cumque perspiciatis placeat ea, laudantium sed voluptate officiis in?</p>
                <button class="btn btnm-primary viga">Lihat Produk</button>
                <button class="btn btnm-light viga mx-2">Selengkapnya</button>
            </div>
            <div class="col-md-6 text-center py-md-0 py-4">
                <img src="{{ asset('img/illust/home.png') }}" class="w-75" alt="Illust Home">
            </div>
        </div>
    </div>

    <div class="container py-4">
        <div class="row">
            <div class="col-md-12">
                <h1 class="viga">Produk Lain</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light px-3 py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center position-relative">
                    <div class="input-search-home">
                        <div class="row">
                            <div class="col-9">
                                <input type="text" class="form-control border-0 px-4" placeholder="Cari sesuatu...">
                            </div>
                            <div class="col-3">
                                <button class="btnm-primary py-3 px-4">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="pt-5">
                        <button class="btn btnm-primary mx-2 px-4 my-md-0 my-2 py-2">Semua</button>
                        <button class="btn btnm-light mx-2 px-4 my-md-0 my-2 py-2">Elektronik</button>
                        <button class="btn btnm-light mx-2 px-4 my-md-0 my-2 py-2">Gadget</button>
                        <button class="btn btnm-light mx-2 px-4 my-md-0 my-2 py-2">Transportasi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
