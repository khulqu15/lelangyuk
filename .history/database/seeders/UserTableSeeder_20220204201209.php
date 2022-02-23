<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'User';
        $user->email = 'user@lelangyuk.com';
        $user->password = Hash::make('password');
        $user->level = 'user';
        $user->save();

        $user = new User();
        $user->name = 'Petugas';
        $user->email = 'petugas@lelangyuk.com';
        $user->password = Hash::make('password');
        $user->level = 'petugas';
        $user->save();

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@lelangyuk.com';
        $user->password = Hash::make('password');
        $user->level = 'admin';
        $user->save();
    }
}
