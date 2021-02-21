@extends('layouts.general')

@section('title', Auth::user()->name)

@section('content')
    <div class="container-fluid pt-5 pb-4">
        <div class="container pt-5">
            <div class="row pt-5">
                <div class="col-md-4">
                    <div class="card border-0 text-center shadow px-4 pt-5 pb-3 position-relative">
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
                    <button class="btn btnm-primary">Produk</button>
                    <button class="btn btnm-light">Lelang</button>
                </div>
            </div>
        </div>
    </div>
@endsection
