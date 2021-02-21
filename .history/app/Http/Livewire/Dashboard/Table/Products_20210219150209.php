<?php

namespace App\Http\Livewire\Dashboard\Table;

use Livewire\Component;

class Products extends Component
{

    public $products;
    public $allProduct;

    public function mount($products)
    {
        $this->allProduct = $products;
        $this->products = $this->allProduct->paginate();

    }

    public function render()
    {
        return view('livewire.dashboard.table.products');
    }
}
