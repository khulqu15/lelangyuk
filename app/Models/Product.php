<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = ['name', 'close', 'price', 'picture', 'description', 'category_id'];

    public function Category()
    {
        return $this->belongsTo(CategoryProduct::class, 'category_id');
    }

    public function Like()
    {
        return $this->hasMany(LikeProduct::class, 'product_id');
    }

    public function Auction()
    {
        return $this->hasMany(Auction::class, 'product_id');
    }

    public function Transaction()
    {
        return $this->hasMany(Transaction::class);
    }

    // public function getCloseAttribute()
    // {
    //     $date = Carbon::create($this->attributes['close'])->isoFormat('dddd, D MMMM Y');
    //     return $date;
    // }
}
