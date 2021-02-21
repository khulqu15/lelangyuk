<div>
    <div class="container py-3">
        <div class="row">
            <div class="col-md-12">
                <h3 class="mt-2">Auction Data Table</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th><i class="fas fa-star"></i></th>
                            <th>User</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($auctions as $auction)
                        <tr>
                            <td scope="row">{{ $auction->status }}</td>
                            <td>{{ $auction->user->name }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
