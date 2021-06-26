<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\User::create([
            'name'=>'Alexies Iglesia',
            'email'=>'ialexies@gmail.com',
            'password'=>bcrypt('alexies'),
            'created_at'=> Carbon::now(),
        	'updated_at'=> Carbon::now()
        ]);
    }
}
