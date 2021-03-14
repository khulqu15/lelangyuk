<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
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
        $products = $query->where('status', 'aktif')->paginate(6);
        $categories = $this->ctr->paginate(4);
        return view('welcome', compact('products', 'categories'));
    }

    public function dashboardTransaction(Request $request)
    {
        $transactions = Transaction::paginate(10);
        return view('transactions', compact('transactions'));
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
        $products = $query->where('status', 'aktif')->paginate(6);
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
            if(Auth::user()->level == 'admin' || Auth::user()->level == 'petugas') {
                return redirect()->route('dashboard');
            }
            $user = User::with(['Like', 'Like.Product', 'Auction', 'Auction.product'])->where('id', Auth::id())->first();
            return view('profile', compact('user'));
        } else {
            return redirect()->route('login');
        }
    }

    public function contact()
    {
        return view('contact');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function dashboardProduct()
    {
        return view('dashboard-product');
    }

    public function dashboardAuction()
    {
        return view('dashboard-auction');
    }

    public function dashboardUser()
    {
        return view('dashboard-user');
    }

    public function editProduct($id)
    {
        $product = Product::find($id);
        return view('product-edit', compact('product'));
    }
}
