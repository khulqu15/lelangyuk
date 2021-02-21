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

    public function render()
    {
        $name = '%'.$this->name.'%';
        $this->categories = CategoryProduct::all();
        $this->products = Product::where('name', 'like', $name);
        return view('livewire.dashboard.table.products', ['products' => $this->products->paginate()]);
    }
}
