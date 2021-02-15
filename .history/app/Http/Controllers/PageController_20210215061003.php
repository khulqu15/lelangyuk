<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function home(Request $request)
    {
        $query = $this->product->query();
        if($request->get('name') && $request->get('name') != '' && $request->get('name') != null) {
            $product = $query->where('name', 'LIKE', "%$request->get('name')%");
        }
        if($request->get('category') && $request->get('category') != '' && $request->get('name') != null) {
            $product = $query->where('category_id', $request->get('category'));
        }
        $product = $query->paginate(6);
        return view('welcome', compact('produk'));
    }
}
