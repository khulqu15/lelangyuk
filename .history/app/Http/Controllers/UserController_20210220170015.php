<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public $path;
    public $dimen;

    public function __construct()
    {
        $this->path = public_path().'/img/user/';
        $this->dimen = 750;
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if($request->file('avatar') != null) {
            if(!File::isDirectory($this->path)) {
                File::makeDirectory($this->path, 0777, false);
            }
        }
    }
}
