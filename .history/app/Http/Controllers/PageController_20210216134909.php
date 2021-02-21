<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public $product;
    public $ctr;

    public function __construct(Product $product, CategoryProduct $category)
    {
        $this->ctr = $category;
        $this->product = $product;
    }

    public function home(Request $request)
    {
        $query = $this->product->query();
        $product = $query->with('Category');
        if($request->get('name')) {
            $products = $query->where('name', 'LIKE', "%".$request->get('name')."%");
        }
        if($request->get('category')) {
            $products = $query->where('category_id', $request->get('category'));
        }
        $products = $query->paginate(6);
        $categories = $this->ctr->paginate(4);
        return view('welcome', compact('products', 'categories'));
    }

    public function products(Request $request)
    {
        $query = $this->product->query();
        $product = $query->with('Category');
        if($request->get('name')) {
            $products = $query->where('name', 'LIKE', "%".$request->get('name')."%");
        }
        if($request->get('category')) {
            $products = $query->where('category_id', $request->get('category'));
        }
        $products = $query->paginate(6);
        $categories = $this->ctr->paginate(4);
        return view('products', compact('products', 'categories'));
    }

    public function product(Request $request, $id)
    {
        $product = $this->product->find($id);
        return view('product', compact('product'));
    }

    public function profile()
    {
        if(Auth::check()) {
            $user = Auth::user();
            return view('profile', compact('user'));
        } else {
            return view('auth.login');
        }
    }
}
