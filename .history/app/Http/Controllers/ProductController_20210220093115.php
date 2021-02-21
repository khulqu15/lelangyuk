<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public $path;
    public $dimen;

    public function __construct()
    {
        $this->path = public_path().'/img/product/';
        $this->dimen = 750;
    }
}
