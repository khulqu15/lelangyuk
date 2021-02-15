@extends('layouts.general')

@section('title', $product->name)

@section('content')

    <h1>{{ $product->name }}</h1>

@endsection
