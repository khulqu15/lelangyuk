<?php

namespace App\Http\Livewire\Dashboard\Table;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{

    public $users;

    public function render()
    {
        $this->users = User::get();
        return view('livewire.dashboard.table.users');
    }
}
