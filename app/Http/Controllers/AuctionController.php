<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuctionController extends Controller
{
    public $auc;

    public function __construct(Auction $auction)
    {
        $this->auc = $auction;
    }

    public function store(Request $request)
    {
        if(Auth::check()) {
            $auction = new Auction();
            $auction->user_id = Auth::id();
            $auction->product_id = $request->product;
            $auction->price = $request->price;
            $auction->status = 'waiting';
            $auction->save();
            return redirect()->back()->with('success', 'Lelang berhasil ditambahkan');
        } else {
            return redirect()->route('login')->with('error', 'Anda harus login terlebih dahulu');
        }
    }
}
