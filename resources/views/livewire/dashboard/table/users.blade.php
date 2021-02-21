<div>
    <div class="container py-3">
        <h2 class="my-2">User Data Table</h2>
        <div class="row py-4">
            <div class="col-lg-4">
                <div class="form-group">
                  <label for="name">Nama</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Cari berdasarkan nama" wire:model='name'>
                </div>
            </div>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td scope="row">{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->level == null ? 'client' : $user->level }}</td>
                        <td>
                            @if ($user->level == null)
                                <button class="btn btn-success btn-sm" wire:click='setLevel("admin", {{ $user->id }})'><i class="fas fa-user-tie"></i></button>
                                <button onclick="return confirm('Yakin ?') || event.stopImmediatePropagation()" class="btn btn-danger btn-sm" wire:click='deleteData({{ $user->id }})'><i class="fas fa-trash"></i></button>
                            @else
                                @if ($user->level == 'admin')
                                    <button class="btn btn-warning btn-sm" wire:click='setLevel("client", {{ $user->id }})'><i class="fas fa-user"></i></button>
                                    <button class="btn btn-primary btn-sm" wire:click='setLevel("petugas", {{ $user->id }})'><i class="fas fa-user-cog"></i></button>
                                @else
                                    <button class="btn btn-success btn-sm" wire:click='setLevel("admin", {{ $user->id }})'><i class="fas fa-user-tie"></i></button>
                                @endif
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
