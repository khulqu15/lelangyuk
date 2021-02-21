<?php

namespace App\Http\Livewire\Components;

use App\Models\LikeProduct;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CardProduct extends Component
{

    public $product;
    public $refresh;
    public $like;

    public function mount($product)
    {
        $this->product = $product;
        if(Auth::check()) {
            $this->like = LikeProduct::where('user_id', Auth::id())->where('product_id', $this->product->id)->get();
        }
    }

    public function render()
    {
        return view('livewire.components.card-product');
    }

    public function like($product, $user)
    {
        $like = LikeProduct::where('product_id', $product)->where('user_id', $user)->first();
        if($like != null) {
            $like->delete();
        } else {
            $like = new LikeProduct();
            $like->product_id = $product;
            $like->user_id = $user;
            $like->save();
        }
        $this->like = LikeProduct::where('user_id', Auth::id())->where('product_id', $this->product->id)->get();
        $this->refreshComponent();
    }

    public function refreshComponent()
    {
        $this->refresh = !$this->refresh;
    }
}
