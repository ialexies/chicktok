<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // 'deliveredBy', 'recievedBy','changeFund','note','product_id',
        \App\Models\Delivery::create([

            'deliveredBy'=>"Alexies",
            'recievedBy'=>'angel',
            'changeFund'=>2600,
            'note'=>'note lang sample',
        ]);
        \App\Models\Delivery::create([

            'deliveredBy'=>"Bea Dultra",
            'recievedBy'=>'Arnold',
            'changeFund'=>2600,
            'note'=>'note lang sample 2',
        ]);
    }
}
