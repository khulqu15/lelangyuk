@extends('layouts.general')

@section('title', $product->name)

@section('content')

    @if (\Session::has('success'))
    <div class="alert alert-success alert-dismissible show position-fixed alert-respond fade">
        <ul>
            <li>{{ \Session::get('success') }}</li>
        </ul>
    </div>
    @else
    <div class="alert alert-danger alert-dismissible show position-fixed alert-respond fade">
        <ul>
            <li>{{ \Session::get('error') }}</li>
        </ul>
    </div>
    @endif

    <div>
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-md-6 px-0">
                    <div class="bg-product">
                        <img class="image-fit-card position-absolute"
                        src="{{ asset('img/product/'.$product->picture) }}" alt="{{ $product->name }}">
                    </div>
                </div>
                <div class="col-md-6 py-5 px-5">
                    <div class="py-5 my-4">
                        <h1 class="viga">{{ $product->name }}</h1>
                        <div class="bgm-primary-light textm-primary py-2 px-5 d-inline-block">{{ $product->close }}</div>
                    </div>
                    <p class="textm-gray mb-5">{{ $product->description }}</p>
                    <p class="textm-gray">Mulai dari harga</p>
                    <h2 class="viga textm-primary">Rp {{ number_format($product->price) }},-</h2>
                    <div class="text-right">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#modal-auction" class="btnm-primary px-5">Tawar</button>
                    </div>

                    <div class="modal fade" id="modal-auction" data-bs-backdrop="static" tabindex="-1" aria-hidden="true" aria-labelledby="modalAuctionLabel">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <form action="{{ route('addAuction') }}" method="POST">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title">Lelang {{ $product->name }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" value="{{ $product->id }}" name="product">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Nominal harga</label>
                                        <input type="number" name="price" id="price" min="{{ $product->price }}" value="{{ $product->price + 10000 }}" class="form-control" aria-describedby="helpId">
                                        <small id="helpId" class="text-muted">Required</small>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-bs-dismiss="modal" class="btn btnm-light px-4 py-2">Batal</button>
                                    <button type="submit" class="btn btnm-primary px-4 py-2">Tawar</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
