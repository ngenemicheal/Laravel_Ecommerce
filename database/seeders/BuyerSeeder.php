<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class BuyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('buyers')->insert([
            'name'=>'ngene emmanuel',
            'email'=>'mngene4@gmail.com',
            'password'=>Hash::make('12345')
        ]);
    }
}
