<?php

namespace App\Http\Livewire\Dashboard\Table;

use App\Models\CategoryProduct;
use App\Models\Product;
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
        $this->products = Product::where('name', 'like', $name)->where('category_id', $this->category)->get();
        return view('livewire.dashboard.table.products');
    }
}
