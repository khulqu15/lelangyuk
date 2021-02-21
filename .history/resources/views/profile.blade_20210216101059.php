@extends('layouts.general')

@section('title', Auth::user()->name)

@section('section')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <div class="card border-0 shadow">
                    <div class="avatar-profile">
                        <img src="{{ asset('img/user/valen.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
