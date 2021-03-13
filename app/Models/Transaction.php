<?php

namespace App\Models;

use App\Http\Livewire\Dashboard\Form\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
 
    protected $table = 'transactions';

    protected $fillable = ['address', 'poscode', 'telp', 'note', 'user_id', 'product_id', 'auction_id'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
    
    public function Auction()
    {
        return $this->belongsTo(Auction::class);
    }

}
