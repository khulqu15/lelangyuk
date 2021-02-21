@extends('layouts.general')

@section('title', 'Products')

@section('content')
<div class="pt-5">
    <div class="pt-5 mt-5">
        <div class="container-fluid mt-5 pt-3 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center position-relative">
                        <div class="input-search-home">
                            <form action="{{ route('products') }}" method="GET">
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
                                            <a href="{{ route('products') }}" type="button" class="btn btnm-light px-4">
                                                <i class="fas fa-undo"></i>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="pt-5 pb-3">
                            <a href="{{ route('products') }}" class="btn {{ request()->get('category') == null ? 'btnm-primary' : 'btnm-light' }} btnm-primary my-md-0 my-2 mx-2 px-4 py-2">Semua</a>
                            @foreach ($categories as $category)
                                <a href="{{ route('products', ['category' => $category->id]) }}"
                                class="btn {{ request()->get('category') == $category->id ? 'btnm-primary' : 'btnm-light' }} my-md-0 my-2 mx-2 px-4 py-2">{{ $category->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
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
