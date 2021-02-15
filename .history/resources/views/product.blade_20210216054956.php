@extends('layouts.general')

@section('title', $product->name)

@section('content')

    <div>
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-md-6">
                    <div class="bg-product">
                        <img class="image-fit-card position-absolute"
                        src="{{ asset('img/product/'.$product->picture) }}" alt="{{ $product->name }}">
                    </div>
                </div>
                <div class="col-md-6 py-5 px-4">
                    <div class="py-5 my-4">
                        <h1 class="viga">{{ $product->name }}</h1>
                        <div class="bgm-primary-light">{{ $product->close }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
