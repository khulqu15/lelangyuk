<div class="container">
    <div class="row">
        <div class="col-md-12 pb-5 pt-4">
            <h2>Product Data Table</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" name="name" id="name" aria-describedby="name-feedback" placeholder="Enter name here">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="category">Kategori</label>
                                <input type="text" class="form-control" name="category" id="category" aria-describedby="name-feedback" placeholder="Enter name here">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Tutup</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td scope="row">
                            <img src="{{ asset('img/product/'.$product->picture) }}" alt="{{ $product->name }}" width="70px">
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>Rp {{ number_format($product->price) }},-</td>
                        <td>{{ $product->close }}</td>
                        <td>
                            @if (Auth::user()->level == 'petugas')
                            <button class="btn btn-primary btn-sm my-2 p-2">
                                <i class="fas fa-eye"></i>
                            </button>
                            @endif
                            <button class="btn btn-success btn-sm my-2 p-2">
                                <i class="fas fa-pen"></i>
                            </button>
                            <button class="btn btn-danger btn-sm my-2 p-2">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->links() }}
        </div>
    </div>
</div>
