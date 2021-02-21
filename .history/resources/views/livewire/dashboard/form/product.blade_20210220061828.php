<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 py-4">
                <button class="btn btnm-light py-2 mb-3"
                onclick="window.location = '{{ URL::previous() }}'"> <i class="fas fa-align-left"></i> Kembali</button>
                <h3>{{ $method == 'edit' ? "Ubah produk $product->name" : "Tambah produk" }}</h3>
            </div>
        </div>
    </div>
</div>
