<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeProduct extends Model
{
    use HasFactory;

    protected $table = 'like_products';

    protected $fillable = ['user_id', 'product_id', 'respond'];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
