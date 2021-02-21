<?php

namespace App\Http\Livewire\Dashboard\Form;

use App\Models\Product as ModelsProduct;
use Livewire\Component;

class Product extends Component
{

    public $method;
    public $dataId;
    public $product;

    public function mount($method, $dataId)
    {
        $this->method = $method;
        $this->dataId = $dataId;
        $this->product = ModelsProduct::find($this->dataId);
    }

    public function render()
    {
        return view('livewire.dashboard.form.product');
    }
}
