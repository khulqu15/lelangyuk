@extends('layouts.general')

@section('title', 'Products')

@section('content')
<div class="pt-5">
    <div class="pt-5 mt-5">
        <div class="container-fluid mt-5 pt-3 bg-light">
            <div class="container">
                <div class="row mt-4">
                    @foreach ($products as $product)
                    <div class="col-md-4 col-sm-6 my-2">
                        <livewire:components.card-product :product="$product"/>
                    </div>
                    @endforeach
                    <div class="col-12 text-right py-4 mt-4">
                        <div class="d-inline-block mb-4">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
