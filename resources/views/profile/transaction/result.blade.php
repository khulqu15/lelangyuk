@extends('layouts.general')

@section('title', 'Finalisasi')

@section('content')
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-md-6 py-5 text-center offset-md-3">
                <h4 class="viga">Finalisasi Transaksi {{ $transaction->auction->product->name }}, Berhasil</h4>
                <p>Segera lakukan transaksi dengan kami dengan batas waktu 48jam, apabila tidak, Transaksi ini kami anggap gugur</p>
            </div>
        </div>
    </div>
@endsection