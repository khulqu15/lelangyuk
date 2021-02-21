<?php

namespace App\Http\Livewire\Dashboard\Table;

use App\Models\Auction;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Auctions extends Component
{

    public $auctions;
    public $user;
    public $product;

    public function render()
    {
        $query = Auction::query();
        $this->auctions = $query->with(['User', 'Product']);
        if($this->user != '') {
            $this->auctions = $query->whereHas('User', function($query) {
                $query->where('name', 'LIKE', '%'.$this->user.'%');
            });
        }
        if($this->product != '') {
            $this->auctions = $query->whereHas('Product', function($query) {
                $query->where('name', 'LIKE', '%'.$this->product.'%');
            });
        }
        $this->auctions = $query->get();
        return view('livewire.dashboard.table.auctions');
    }

    public function deleteData($id)
    {
        $auction = Auction::destroy($id);
        Session::flush('success', 'Berhasil dihapus');
    }

    public function setStatus($status, $id)
    {
        $auction = Auction::find($id);
        $auction->status = $status;
        $auction->save();
        if($status == 'success') {
            $auctions = Auction::where('product_id', $auction->product_id)->where('id', '!=', $auction->id)->get();
            foreach($auctions as $auc) {
                $auct = Auction::find($auc->id);
                $auct->status = 'failed';
                $auct->save();
            }
        }
    }
}
