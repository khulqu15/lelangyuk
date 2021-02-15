<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 5; $i++) {
            $product = new Product();
            $product->name = 'Produk'.$i+5;
            $product->close = "2020-0$i-0$i";
            $product->picture = "$i.png";
            $product->price = $i+5 ."00000";
            $product->category_id = $i;
            $product->description = "Lorem ipsum dolor sit amet, los protokaos el mindo elva vin de ala manacos";
            $product->save();
        }
    }
}
