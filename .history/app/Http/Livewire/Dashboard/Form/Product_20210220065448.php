<?php

namespace App\Http\Livewire\Dashboard\Form;

use App\Models\CategoryProduct;
use App\Models\Product as ModelsProduct;
use Livewire\Component;

class Product extends Component
{

    public $method;
    public $dataId;
    public $product;
    public $categories;

    public function mount($method, $dataId)
    {
        $this->method = $method;
        $this->dataId = $dataId;
        $this->categories = CategoryProduct::all();
        $this->product = ModelsProduct::with('Category')->find($this->dataId);
    }

    public function render()
    {
        return view('livewire.dashboard.form.product');
    }
}
