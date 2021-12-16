<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // factory(App\Product::class, 30)->create();
        // \App\Models\Product::factory()->count(30)->create();
        \App\Models\Product::create([
            'name'=>'Roast Chicken',
            'description'=>'Roasted chicken and marinated using secret ingredients',
            'price'=>22511,
            // 'stock'=>50,
            'qty_raw'=>30,
            'qty_cook'=>4,
            'img'=>'product-roast-chicken.jpg'
        ]);
        \App\Models\Product::create([
            'name'=>'Frietzkn 8',
            'description'=>'Short Description of the product',
            'price'=>35,
            // 'stock'=>30,
            'qty_raw'=>40,
            'qty_cook'=>8,
            'img'=>'41148.jpg'
        ]);
        \App\Models\Product::create([
            'name'=>'Fried Neck',
            'description'=>'Short Description of the product',
            'price'=>15,
            // 'stock'=>90,
            'qty_raw'=>20,
            'qty_cook'=>2,
            'img'=>'41148.jpg'
        ]);
        \App\Models\Product::create([
            'name'=>'Balat',
            'description'=>'Short Description of the product',
            'price'=>10,
            // 'stock'=>10,
            'qty_raw'=>30,
            'qty_cook'=>2,
            'img'=>'40952.jpg'
        ]);
        \App\Models\Product::create([
            'name'=>'Atsara',
            'description'=>'Short Description of the product',
            'price'=>75,
            // 'stock'=>50,
            'qty_raw'=>30,
            'qty_cook'=>0,
            'img'=>'27332.jpg'
        ]);
    }
}
