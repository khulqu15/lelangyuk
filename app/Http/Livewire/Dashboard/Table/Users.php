<?php

namespace App\Http\Livewire\Dashboard\Table;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{

    public $users;
    public $name;

    public function render()
    {
        $query = User::query();
        if($this->name != '') {
            $this->users = $query->where('name', 'LIKE', '%'.$this->name.'%');
        }
        $this->users = $query->get();
        return view('livewire.dashboard.table.users');
    }

    public function setLevel($level, $id)
    {
        $user = User::find($id);
        if($level == 'client') {
            $user->level = null;
        } else {
            $user->level = $level;
        }
        $user->save();
    }

    public function deleteData($id)
    {
        $user = User::find($id);
        $user->delete();
    }
}
