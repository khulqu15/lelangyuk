<?php

namespace App\Http\Livewire\Components;

use App\Models\Auction;
use Livewire\Component;

class CardAuction extends Component
{

    public $auction;

    public function mount(Auction $auction)
    {
        $this->auction = $auction;
    }

    public function render()
    {
        return view('livewire.components.card-auction');
    }
}
