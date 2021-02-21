@extends('layouts.general')

@section('title', Auth::user()->name)

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <div class="card border-0 shadow">
                    <div class="avatar-profile">
                        <img src="{{ asset('img/user/valen.png') }}" alt="{{ Auth::user()->name }}">
                    </div>
                    <h2 class="viga">{{ Auth::user()->name }}</h2>
                    <p class="textm-gray">{{ Auth::user()->level }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
