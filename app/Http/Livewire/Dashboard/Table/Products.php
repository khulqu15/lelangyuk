<?php

namespace App\Http\Livewire\Dashboard\Table;

use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Products extends Component
{

    public $categories;
    public $products;
    public $name;
    public $category;

    public function render()
    {
        $name = '%'.$this->name.'%';
        $this->categories = CategoryProduct::all();
        $query = Product::query();
        if($this->name != '') {
            $this->products = $query->where('name', 'like', $name);
        }
        if($this->category != '') {
            $this->products = $query->where('category_id', $this->category);
        }
        $this->products = $query->orderBy('id', 'DESC')->get();
        return view('livewire.dashboard.table.products');
    }

    public function setStatus($id)
    {
        $product = Product::find($id);
        if($product->status == 'aktif') {
            $product->status = 'noaktif';
        } else {
            $product->status = 'aktif';
        }
        $product->save();
    }

    public function deleteData($id)
    {
        $product = Product::find($id);
        unlink(public_path().'/img/product/'.$product->picture);
        $product->delete();
        Session::flash('success', 'Berhasil dihapus');
    }
}
