<?php

namespace App\Http\Livewire\Dashboard\Table;

use App\Models\Auction;
use Livewire\Component;

class Auctions extends Component
{

    public $auctions;
    public $user;
    public $product;

    public function render()
    {
        $query = Auction::query();
        if($this->user != '') {
            $this->auctions = $query->with(['User' => function($query) {
                $query->where('name', $this->user);
            }, 'Product']);
        }
        if($this->product != '') {
            $this->auctions = $query->with(['User', 'Product' => function($query) {
                $query->where('name', $this->product);
            }]);
        }
        $this->auctions = $query->get();
        return view('livewire.dashboard.table.auctions');
    }

    public function deleteData($id)
    {
        $auction = Auction::destroy($id);
    }
}
