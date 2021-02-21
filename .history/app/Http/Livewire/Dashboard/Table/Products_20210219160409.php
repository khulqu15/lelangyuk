<?php

namespace App\Http\Livewire\Dashboard\Table;

use App\Models\CategoryProduct;
use App\Models\Product;
use Livewire\Component;

class Products extends Component
{

    public $categories;
    public $productsData;
    public $name;
    public $category;

    public function render()
    {
        $name = '%'.$this->name.'%';
        $this->categories = CategoryProduct::all();
        $query = Product::query();
        if($this->name != '') {
            $this->productsData = $query->where('name', 'like', $name);
        }
        if($this->category != '') {
            $this->productsData = $query->where('category_id', $this->category);
        }
        $this->productsData = $query->paginate(5);
        $products = $this->productsData;
        return view('livewire.dashboard.table.products', compact('products'));
    }
}
