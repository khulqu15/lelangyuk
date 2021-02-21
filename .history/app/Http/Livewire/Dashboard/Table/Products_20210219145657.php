<?php

namespace App\Http\Livewire\Dashboard\Table;

use App\Http\Livewire\Dashboard\Form\Product;
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
        return view('livewire.dashboard.table.products', ['products' => $this->products->paginate(10)]);
    }
}
