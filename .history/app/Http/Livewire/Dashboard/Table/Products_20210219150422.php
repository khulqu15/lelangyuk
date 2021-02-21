<?php

namespace App\Http\Livewire\Dashboard\Table;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{

    public function render()
    {
        $product = Product::paginate();
        return view('livewire.dashboard.table.products', compact());
    }
}
