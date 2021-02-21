<div class="container">
    <div class="row">
        <div class="col-md-12 py-5">
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
                            <button class="btn btn-success btn-sm m-2 p-2">
                                <i class="fas fa-pen"></i>
                            </button>
                            <button class="btn btn-danger btn-sm m-2 p-2">
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
