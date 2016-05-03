<?php

use Illuminate\Database\Seeder;

class TaxiLocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('taxilocations')->insert([
            'userid' => 1
            
        ]);

         DB::table('taxilocations')->insert([
            'userid' => 2
            
        ]);

         DB::table('taxilocations')->insert([
            'userid' => 3
            
        ]);

         DB::table('taxilocations')->insert([
            'userid' => 4
            
        ]);
    }
}
