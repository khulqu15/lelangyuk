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
        $query = Product::query();
        if($this->name != '') {
            $products = $query->where('name', 'like', $name);
        }
        if($this->category != '') {
            $products = $query->where('category_id', $this->category);
        }
        $products = $query->paginate(5);
        $this->products = collect($products->items());
        return view('livewire.dashboard.table.products');
    }
}
