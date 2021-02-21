<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 py-4">
                @if ($method == 'edit')
                <button class="btn btnm-light py-2 mb-3"
                onclick="window.location = '{{ URL::previous() }}'"><i class="fas fa-arrow-left"></i> Kembali</button>
                <h3>{{ $method == 'edit' ? "Ubah produk $product->name" : "Tambah produk" }}</h3>
                @endif
                {{ $method }}
                <form action="{{ $method == 'edit' ? route('updateProduct', ['id' => $product->id]) : route('storeProduct') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="name">Nama Produk</label>
                        <input value="{{ $method == 'edit' ? $product->name : '' }}" required type="text" class="form-control" name="name" id="name" aria-describedby="name-feedback" placeholder="Name Product Here">
                        <small id="name-feedback" class="form-text text-muted">Required</small>
                    </div>
                    <div class="form-group mb-4">
                        <label for="close">Ditutup pada tanggal</label>
                        <input value="{{ $method == 'edit' ?  date('Y-m-d', strtotime($product->close)) : '' }}" required type="date" class="form-control" name="close" id="close" aria-describedby="close-feedback">
                        <small id="close-feedback" class="form-text text-muted">Required</small>
                    </div>
                    <div class="form-group mb-4">
                        <label for="price">Mulai harga</label>
                        <input value="{{ $method == 'edit' ? $product->price : '' }}" required type="number" class="form-control" name="price" id="price" aria-describedby="price-feedback">
                        <small id="price-feedback" class="form-text text-muted">Required</small>
                    </div>
                    <div class="form-group mb-4">
                        <label for="category">Kategori</label>
                        <select required name="category" id="category" class="form-control" aria-describedby="ctr-feedback">
                            <option value="{{ $method == 'create' ? '' : $product->category_id }}">{{ $method == 'create' ? 'Pilih Category' : $product->category->name }}</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <small id="category-feedback" class="form-text text-muted">Required</small>
                    </div>
                    <div class="form-group mb-4">
                        <label for="description">Deskripsi</label>
                        <textarea name="description" id="description" class="form-control" required cols="30" rows="4">{{ $method == 'edit' ? $product->description : '' }}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="file">Foto Produk</label>
                            <input type="file" class="form-control" name="picture" id="file" accept=".jpg, .png, .jpeg" {{ $method == 'edit' ? '' : 'required'}}>
                        </div>
                        <div class="col-md-6 text-center">
                            @if ($method == 'edit')
                                <img src="{{ asset('img/product/'.$product->picture) }}" class="w-50 mx-auto preview-image" alt="{{ $product->name }}">
                            @else
                                <img src="{{ asset('img/product/no_preview.png') }}" class="w-50 mx-auto" alt="Image Preview">
                            @endif
                        </div>
                        <div class="col-md-12 text-right mt-4 mb-3">
                            <button class="btn btnm-primary px-5">{{ $method == 'edit' ? 'Update' : 'Save'}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
