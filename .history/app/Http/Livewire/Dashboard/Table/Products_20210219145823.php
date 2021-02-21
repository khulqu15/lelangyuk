<?php

namespace App\Http\Livewire\Dashboard\Table;

use Livewire\Component;

class Products extends Component
{

    public $products;

    public function mount($products)
    {
        $this->products = $products;
    }

    public function render()
    {
        return view('livewire.dashboard.table.products', ['products' => Product::paginate(10)]);
    }
}
