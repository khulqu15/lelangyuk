<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 py-4">
                @if ($method == 'edit')
                <button class="btn btnm-light py-2 mb-3"
                onclick="window.location = '{{ URL::previous() }}'"><i class="fas fa-arrow-left"></i> Kembali</button>
                <h3>{{ $method == 'edit' ? "Ubah produk $product->name" : "Tambah produk" }}</h3>
                @endif

                <form action="{{ route('storeProduct') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="name">Nama Produk</label>
                      <input type="text" class="form-control" name="name" id="name" aria-describedby="name-feedback" placeholder="Name Product Here">
                      <small id="name-feedback" class="form-text text-muted">Required</small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
