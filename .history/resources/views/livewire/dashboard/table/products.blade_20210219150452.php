<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>{{ $product }}</h1>
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
                        <td scope="row"><img src="{{ asset('img/product/'.$product->picture) }}" alt=""></td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->close }}</td>
                        <td>{{ $product->id }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
