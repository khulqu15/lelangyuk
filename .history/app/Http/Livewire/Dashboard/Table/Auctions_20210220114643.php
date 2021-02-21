<?php

namespace App\Http\Livewire\Dashboard\Table;

use App\Models\Auction;
use Livewire\Component;

class Auctions extends Component
{

    public $auctions;

    public function mount()
    {
        $this->auctions = Auction::with('User', 'Product')->get();
    }

    public function render()
    {
        return view('livewire.dashboard.table.auctions');
    }
}
