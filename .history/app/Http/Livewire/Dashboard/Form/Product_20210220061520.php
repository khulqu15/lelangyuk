<?php

namespace App\Http\Livewire\Dashboard\Form;

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
        $this->product = Product::find($this->dataId);
    }

    public function render()
    {
        return view('livewire.dashboard.form.product');
    }
}
