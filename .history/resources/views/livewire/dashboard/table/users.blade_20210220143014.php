<div>
    <div class="container py-3">
        <h2 class="my-2">User Data Table</h2>
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
                            <button class="btn btn-warning btn-sm" wire:click='setLevel("client", {{ $user->id }})'><i class="fas fa-user"></i></button>
                            <button class="btn btn-primary btn-sm" wire:click='setLevel("petugas", {{ $user->id }})'><i class="fas fa-user-cog"></i></button>
                            <button class="btn btn-success btn-sm" wire:click='setLevel("admin", {{ $user->id }})'><i class="fas fa-user-tie"></i></button>
                            @if ($user->level == null)
                                <button class="btn btn-danger btn-sm" wire:click='deleteData({{ $user->id }})'><i class="fas fa-trash"></i></button>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
