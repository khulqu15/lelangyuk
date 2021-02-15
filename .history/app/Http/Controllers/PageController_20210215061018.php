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
            $products = $query->where('name', 'LIKE', "%$request->get('name')%");
        }
        if($request->get('category') && $request->get('category') != '' && $request->get('name') != null) {
            $products = $query->where('category_id', $request->get('category'));
        }
        $products = $query->paginate(6);
        return view('welcome', compact('products'));
    }
}
