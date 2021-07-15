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
            'stock'=>50,
            'img'=>'product-roast-chicken.jpg'
        ]);
        \App\Models\Product::create([
            'name'=>'Frietzkn 8',
            'description'=>'Short Description of the product',
            'price'=>35,
            'stock'=>30,
            'img'=>'product-roast-chicken.jpg'
        ]);
        \App\Models\Product::create([
            'name'=>'Fried Neck',
            'description'=>'Short Description of the product',
            'price'=>15,
            'stock'=>90,
            'img'=>'product-roast-chicken.jpg'
        ]);
        \App\Models\Product::create([
            'name'=>'Balat',
            'description'=>'Short Description of the product',
            'price'=>10,
            'stock'=>10,
            'img'=>'product-roast-chicken.jpg'
        ]);
        \App\Models\Product::create([
            'name'=>'Atsara',
            'description'=>'Short Description of the product',
            'price'=>75,
            'stock'=>50,
            'img'=>'product-roast-chicken.jpg'
        ]);
    }
}
