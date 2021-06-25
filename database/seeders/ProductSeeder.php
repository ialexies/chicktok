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
            'price'=>22511
        ]);
        \App\Models\Product::create([
            'name'=>'Frietzkn 8',
            'price'=>35
        ]);
        \App\Models\Product::create([
            'name'=>'Fried Neck',
            'price'=>15
        ]);
        \App\Models\Product::create([
            'name'=>'Balat',
            'price'=>10
        ]);
        \App\Models\Product::create([
            'name'=>'Atsara',
            'price'=>75
        ]);
    }
}
