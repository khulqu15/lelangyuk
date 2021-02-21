<?php

namespace App\Http\Livewire\Dashboard\Table;

use App\Models\CategoryProduct;
use App\Models\Product;
use Livewire\Component;

class Products extends Component
{

    public function render()
    {
        $categories = CategoryProduct::all();
        $products = Product::paginate(6);
        return view('livewire.dashboard.table.products', compact('products', 'categories'));
    }
}
