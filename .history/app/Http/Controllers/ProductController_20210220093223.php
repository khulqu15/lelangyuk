<?php

namespace App\Http\Controllers;

use App\Models\Product;
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

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->close = $request->close;
        $product->price = $request->price;
        $file = $request->file('picture');
    }
}
