@extends('layouts.general')

@section('title', $product->name)

@section('content')

    <div>
        <div class="py-5">
            <h1>{{ $product->name }}</h1>
        </div>
    </div>

@endsection
