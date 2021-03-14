<?php

namespace App\Http\Livewire\Dashboard\Table;

use App\Models\Transaction;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Transactions extends Component
{

    public $transactions;

    public function render()
    {
        $this->transactions = Transaction::with('User', 'Auction', 'Auction.Product')->get();
        return view('livewire.dashboard.table.transactions');
    }

    public function deleteData($id)
    {
        $transaction = Transaction::find($id);
        $transaction->delete();
    }
}
