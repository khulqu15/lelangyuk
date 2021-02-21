<div class="container">
    <div class="row">
        <div class="col-md-12 pb-5 pt-4">
            <div>
                <button class="btn btnm-primary btn-fab p-3" data-bs-toggle="modal" data-bs-target="#modal-form-create"><i class="fas fa-plus"></i></button>
            </div>
            <div class="modal fade" id="modal-form-create" tabindex="-1" aria-labelledby="modal-form-create" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Create New Product</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <livewire:dashboard.form.product method="create" :dataId="null">
                        </div>
                    </div>
                </div>
            </div>
            <h2>Product Data Table</h2>
            <div class="row">
                <div class="col-md-6 py-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input wire:model='name' type="text" class="form-control" name="name" id="name" placeholder="Enter name here">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="category">Kategori</label>
                                <select wire:model='category' type="text" class="form-control" name="category" id="category">
                                    <option value="">Pilih Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
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
                            <button wire:click="setStatus({{ $product->id }})" class="btn {{ $product->status == 'aktif' ? 'btn-primary' : 'btn-light' }} btn-sm my-2 p-2">
                                <i class="fas {{ $product->status == 'aktif' ? 'fa-eye' : 'fa-eye-slash' }}"></i>
                            </button>
                            @endif
                            <button onclick="window.location = '{{ route('editProduct', ['id' => $product->id]) }}'" wire:click="updateData($product->id)" class="btn btn-success btn-sm my-2 p-2">
                                <i class="fas fa-pen"></i>
                            </button>
                            <button onclick="return confirm('Yakin ?') || event.stopImmediatePropagation()" wire:click="deleteData({{ $product->id }})" class="btn btn-danger btn-sm my-2 p-2">
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
