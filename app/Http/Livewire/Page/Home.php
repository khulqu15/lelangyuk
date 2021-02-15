<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;

class Home extends Component
{

    public $text;

    public function mount($product)
    {
        $this->text = $product;
    }

    public function render()
    {
        return view('livewire.page.home');
    }
}
