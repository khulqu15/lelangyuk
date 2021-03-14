<div>
    {{-- Success is as dangerous as failure. --}}
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 pb-5 pt-4">
            <h2>Transactions Data Table</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Harga</th>
                        <th>Produk</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->user->name }}</td>
                        <td>{{ $transaction->Auction->price }},-</td>
                        <td>{{ $transaction->Auction->Product->name }}</td>
                        <td>{{ $transaction->status == null ? 'menunggu verifikasi' : $transaction->status }}</td>
                        <td>
                            <button onclick="return confirm('Yakin ?') || event.stopImmediatePropagation()" wire:click="deleteData({{ $transaction->id }})" class="btn btn-danger btn-sm my-2 p-2">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
