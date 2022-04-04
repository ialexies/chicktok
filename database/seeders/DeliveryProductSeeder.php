<?php

namespace Database\Seeders;
// use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeliveryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('delivery_product')->insert([
            'delivery_id'=>1,
            'product_id'=>1,
            'quantity'=>24,
        ]);

        DB::table('delivery_product')->insert([
            'delivery_id'=>1,
            'product_id'=>3,
            'quantity'=>30,
        ]);
        DB::table('delivery_product')->insert([
            'delivery_id'=>1,
            'product_id'=>4,
            'quantity'=>40,
        ]);


        DB::table('delivery_product')->insert([
            'delivery_id'=>2,
            'product_id'=>1,
            'quantity'=>20,
        ]);
        DB::table('delivery_product')->insert([
            'delivery_id'=>2,
            'product_id'=>3,
            'quantity'=>10,
        ]);
        DB::table('delivery_product')->insert([
            'delivery_id'=>2,
            'product_id'=>4,
            'quantity'=>40,
        ]);

    }
}
