<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 py-4">
                <button class="btn btnm-light" onclick="window.location = '{{ Redirect::back() }}'">Kembali</button>
                <h3>{{ $method == 'edit' ? "Ubah produk $product->name" : "Tambah produk" }}</h3>
            </div>
        </div>
    </div>
</div>
