<?php

namespace App\Models;

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
}
