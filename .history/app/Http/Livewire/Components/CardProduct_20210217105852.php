<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class CardProduct extends Component
{

    public $product;
    public $user;

    public function mount($product, $user)
    {
        $this->product = $product;
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.components.card-product');
    }
}
