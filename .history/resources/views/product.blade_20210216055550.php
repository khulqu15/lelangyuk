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
                        <div class="bgm-primary-light textm-primary py-2 px-5 d-inline-block">{{ $product->close }}</div>
                    </div>
                    <p class="textm-gray mb-5">{{ $product->description }}</p>
                </div>
            </div>
        </div>
    </div>

@endsection
