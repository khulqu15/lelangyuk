@extends('layouts.general')

@section('title', Auth::user()->name)

@section('content')
    @if (Auth::check())
    <div class="modal fade" id="modalUser" tabindex="-1" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data User</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{-- <button class="btn btnm-primary py-2 px-4" id="data-toggle">Ganti Data</button>
                    <button class="btn btnm-light py-2 px-4" id="password-toggle">Ganti Password</button> --}}
                    <div id="change-data" class="pt-4">
                        <form action="{{ route('updateUser', ['id' => Auth::user()->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-8">
                                    <div class="form-group my-2">
                                        <label for="avatar">Avatar</label>
                                        <input type="file" name="avatar" id="avatar" class="form-control" aria-describedby="name-feedback">
                                        <small id="name-feedback" class="text-muted">Optional</small>
                                    </div>
                                </div>
                                <div class="col-4 text-center pt-4">
                                    <div class="avatar-sm d-inline-block">
                                        <img class="image-fit-card" src="{{ Auth::user()->avatar == null ? asset('img/user/avatar.png') : asset('img/user/'.Auth::user()->avatar) }}" id="preview-image" alt="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group my-2">
                                <label for="name">Nama</label>
                                <input type="text" required name="name" id="name" class="form-control" placeholder="Your name here" value="{{ Auth::user()->name }}" aria-describedby="name-feedback">
                                <small id="name-feedback" class="text-muted">Required</small>
                            </div>
                            <div class="form-group my-2">
                                <label for="email">Email</label>
                                <input type="email" required name="email" id="email" class="form-control" placeholder="Your email here" value="{{ Auth::user()->email }}" aria-describedby="email-feedback">
                                <small id="email-feedback" class="text-muted">Required</small>
                            </div>
                            <div class="text-right pt-4">
                                <button class="btn btnm-primary px-5">Save</button>
                            </div>
                        </form>
                    </div>
                    {{-- <div id="change-password" class="pt-4">
                        <form action="{{ route('updatePassword', ['id' => Auth::user()->id]) }}" method="POST">
                            @csrf
                            <div class="form-group my-2">
                                <label for="old_password">Password Lama</label>
                                <input type="password" required name="old_password" id="old_password" class="form-control">
                            </div>
                            <div class="form-group my-2">
                                <label for="new_password">Password Baru</label>
                                <input type="password" required name="new_password" id="new_password" class="form-control">
                            </div>
                            <div class="form-group my-2">
                                <label for="new_re_password">Ulangi Password Baru</label>
                                <input type="password" required name="new_re_password" id="new_re_password" class="form-control">
                            </div>
                            <div class="text-right pt-4">
                                <button class="btn btnm-primary px-5">Save</button>
                            </div>
                        </form>
                    </div> --}}
                    <script>
                        $('#data-toggle').click(function() {
                            $(this).addClass('btnm-primary').removeClass('btnm-light')
                            $('#password-toggle').removeClass('btnm-primary').addClass('btnm-light')
                            $('#change-data').removeClass('d-none')
                            $('#change-password').addClass('d-none')
                        })
                        $('#password-toggle').click(function() {
                            $(this).addClass('btnm-primary').removeClass('btnm-light')
                            $('#data-toggle').removeClass('btnm-primary').addClass('btnm-light')
                            $('#change-password').removeClass('d-none')
                            $('#change-data').addClass('d-none')
                        })
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-5 pb-4">
        <div class="container pt-5">
            <div class="row pt-5">
                <div class="col-md-4">
                    <div class="card position-sticky sticky-top border-0 mb-4 shadow-smooth text-center shadow px-4 pt-5 pb-3 position-relative"
                        style="top: 120px; z-index: 0">
                        <div class="position-absolute cursor-point ellipsis-menu-right" id="menu-toggle">
                            <i class="fas fa-ellipsis-h" id="icon-ellipsis"></i>
                        </div>
                        <div class="position-absolute menu-ellipsis hide">
                            <button class="btn border-0 item w-100" data-bs-toggle="modal" data-bs-target="#modalUser">Edit data</button>
                        </div>
                        <!-- Modal -->
                        <script>
                            $('#menu-toggle').click(function() {
                                $('.menu-ellipsis').toggleClass('hide')
                                if($('.menu-ellipsis').hasClass('hide')) {
                                    $('#icon-ellipsis').addClass('fa-ellipsis-h').removeClass('fa-times')
                                } else {
                                    $('#icon-ellipsis').removeClass('fa-ellipsis-h').addClass('fa-times')
                                }
                            })
                        </script>
                        <div class="avatar-profile mt-3">
                            <img src="{{ Auth::user()->avatar == null ? asset('img/user/avatar.png') : asset('img/user/'.Auth::user()->avatar) }}" class="image-fit-card rad" alt="{{ Auth::user()->name }}">
                        </div>
                        <h4 class="viga mt-4 mb-0">{{ Auth::user()->name }}</h4>
                        <p class="textm-gray">{{ Auth::user()->email }}</p>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btnm-primary py-2 px-5" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Logout') }}
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-8">
                    <button class="btn viga btnm-primary" id="btn-product" onclick="toggleView('product')">Produk yang disukai</button>
                    <button class="btn viga btnm-light mx-2" id="btn-auction" onclick="toggleView('auction')">Catatan Lelang</button>
                    <div class="row mt-3" id="product-content">
                        @if (count(Auth::user()->like) > 0)
                            @foreach ($user->like as $product)
                                <div class="col-md-6">
                                    <livewire:components.card-product :product="$product->product">
                                </div>
                            @endforeach
                        @else
                            <div class="text-center py-5">
                                <img src="{{ asset('img/illust/notfound.png') }}" class="w-50" alt="Not Found">
                                <h3 class="viga mt-4">Tidak ada data</h3>
                            </div>
                        @endif
                    </div>
                    <div class="row mt-3 d-none" id="auction-content">
                        @if (count($user->auction) > 0)
                            @foreach ($user->auction as $item)
                                <div class="col-md-6 py-3">
                                    <livewire:components.card-auction :auction="$item">
                                </div>
                            @endforeach
                        @else
                            <div class="text-center py-5">
                                <img src="{{ asset('img/illust/notfound.png') }}" class="w-50" alt="Not Found">
                                <h3 class="viga mt-4">Tidak ada data</h3>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleView(menu) {
            if(menu == 'product') {
                $('#product-content').removeClass('d-none')
                $('#auction-content').addClass('d-none')
                $('#btn-auction').addClass('btnm-light').removeClass('btnm-primary');
                $('#btn-product').removeClass('btnm-light').addClass('btnm-primary');
            } else {
                $('#product-content').addClass('d-none')
                $('#auction-content').removeClass('d-none')
                $('#btn-product').addClass('btnm-light').removeClass('btnm-primary');
                $('#btn-auction').removeClass('btnm-light').addClass('btnm-primary');
            }
        }
    </script>
    @endif
@endsection
