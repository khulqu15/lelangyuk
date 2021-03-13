@extends('layouts.general')

@section('title', 'Tambah Transaksi')

@section('content')
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-md-7 py-5">
                <h4 class="viga">{{ request()->route()->getName() == 'transaction.edit' ? 'Edit Data' : 'Tambah Data' }} Transaksi {{ $auction->product->name }}</h4>
                <form method="POST" action="{{ request()->route()->getName() == 'transaction.edit' ? route('transaction.update', $transaction->id) : route('transaction.store') }}">
                    @csrf
                    @if (request()->route()->getName() == 'transaction.edit')
                        <input type="hidden" name="_method" value="PATCH">
                    @endif
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                    <input type="hidden" name="product_id" value="{{ $auction->product->id }}">
                    <input type="hidden" name="auction_id" value="{{ $auction->id }}">
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group my-3">
                                <label for="address">Alamat Pengiriman</label>
                                <input type="text" required value="{{ request()->route()->getName() == 'transaction.edit' ? $transaction->address : '' }}"
                                    class="form-control" name="address" id="address" aria-describedby="addressId" placeholder="Alamat">
                                <small id="addressId" class="form-text text-muted">Required</small>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group my-3">
                                <label for="poscode">Kode Pos</label>
                                <input type="number" required value="{{ request()->route()->getName() == 'transaction.edit' ? $transaction->poscode : '' }}"
                                    class="form-control" name="poscode" id="poscode" aria-describedby="poscodeId" placeholder="xxxxx">
                                <small id="poscodeId" class="form-text text-muted">Required</small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="telp">Nomor Telepon</label>
                        <input type="tel" required value="{{ request()->route()->getName() == 'transaction.edit' ? $transaction->telp : '' }}"
                            class="form-control" name="telp" id="telp" aria-describedby="telpId" placeholder="Tel">
                        <small id="telpId" class="form-text text-muted">Required</small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="note">Catatan</label>
                        <input type="tel" value="{{ request()->route()->getName() == 'transaction.edit' ? $transaction->note : '' }}"
                            class="form-control" name="note" id="note" aria-describedby="noteId" placeholder="Berikan cacatan">
                        <small id="noteId" class="form-text text-muted">Optional</small>
                    </div>
                    <button class="btn btnm-light px-5">Simpan</button>
                    @if (request()->route()->getName() == 'transaction.edit')
                        <a class="btn btnm-primary px-5" onclick="return confirm('Yakin ?')" href="{{ route('transaction.final', $transaction->id) }}">Finalisasi</a>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection