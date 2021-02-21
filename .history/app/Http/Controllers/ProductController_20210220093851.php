<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

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
        if(!File::isDirectory($this->path)) {
            File::makeDirectory($this->path, 0777, false);
        }
        $file = $request->file('picture');
        $fileName = str_replace(' ', '-', $request->name).time().'_'.uniqid().$file->extension();
        $img = Image::make($file->path());
        $img->resize($this->dimen, $this->dimen, function($constraint) {
            $constraint->aspectRatio();
        })->save($this->path.$fileName);
        $product->picture = $fileName;
        $product->save();
        return redirect()->route('dashboard.product')->with('success', 'Produk Ditambahkan');
    }
}
