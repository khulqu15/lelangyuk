<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public $tf;
   
    public function __construct(Transaction $tf)
    {
        $this->tf = $tf;
    }

    public function index()
    {
        
    }
    
    public function create($auctionId)
    {
        $auction = Auction::with('Product')->where('id', $auctionId)->first();
        $transaction = Transaction::where('auction_id', $auction->id)->where('user_id', Auth::id())->first();
        // var_dump($transaction);
        // exit;
        if($transaction != null) {
            if($transaction->status != null) {
                return redirect()->route('transaction.final', $transaction->id);     
            }
            return redirect()->route('transaction.edit', ['id' => $transaction->id, 'auctionId' => $auction->id]);            
        }
        return view('profile.transaction.form', compact('auction'));
    }
    
    public function store(Request $request)
    {
        $create = $this->tf->create($request->all());
        return redirect()->route('transaction.edit', ['id' => $create->id, 'auctionId' => $create->auction_id])->with('success', 'Transaksi Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $transaction = $this->tf->find($id);
        $auction = Auction::with('Product')->where('id', $transaction->auction_id)->first();
        return view('profile.transaction.form', compact('auction', 'transaction'));
    }

    public function update(Request $request, $id)
    {
        $update = $this->tf->where('id', $id)->update($request->except('_token', '_method'));
        $transaction = $this->tf->find($id);
        return redirect()->back()->with('success', 'Transaksi Berhasil Diupdate');   
    }

    public function finalization($id)
    {
        $update = Transaction::find($id);
        $update->status = 'final';
        $update->save();
        $transaction = Transaction::with('Auction', 'Auction.Product')->where('id', $id)->first();
        return view('profile.transaction.result', compact('transaction'));
    }

    public function destroy()
    {
        
    }
}
