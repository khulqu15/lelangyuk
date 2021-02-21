<div>
    <div class="container py-3">
        <h2 class="my-2">User Data Table</h2>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td scope="row">{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td><button wire:click='deleteData({{ $user->id }})'></button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
