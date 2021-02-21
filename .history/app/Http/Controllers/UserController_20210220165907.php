<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        # code...
    }
}
