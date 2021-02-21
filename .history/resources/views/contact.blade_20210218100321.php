@extends('layouts.general')

@section('title', 'Contact')

@section('content')
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-md-4 px-0">
                <div class="full-page position-relative">
                    <img src="{{ asset('img/user/valen.png') }}" alt="Developer" class="image-fit-card position-absolute" style="opacity: .5">
                </div>
            </div>
            <div class="col-md-6 offset-md-1 px-5 py-5">
                <h1 class="viga mt-5">Contact Us</h1>
                <form action="{{ route('sendEmail') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group py-3">
                            <label for="name py-3">Nama</label>
                            <input type="text" name="name" required id="name" class="form-control" placeholder="Your name here" aria-describedby="name-feedback">
                            <small id="name-feedback" class="text-muted">required</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group py-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" required id="email" class="form-control" placeholder="Your email here" aria-describedby="email-feedback">
                            <small id="name-feedback" class="text-muted">required</small>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group py-3">
                            <label for="subject">Subjek</label>
                            <input type="text" name="subject" required id="subject" class="form-control" placeholder="Your subject here" aria-describedby="subject-feedback">
                            <small id="name-feedback" class="text-muted">required</small>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group py-3">
                            <label for="text">Isi Pesan</label>
                            <textarea name="text" required id="text" class="form-control" placeholder="Type your message" aria-describedby="text-feedback"></textarea>
                            <small id="name-feedback" class="text-muted">required</small>
                        </div>
                    </div>
                    <div class="text-right">
                        <button class="btnm-primary px-5">Kirim</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
