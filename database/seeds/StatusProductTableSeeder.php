<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_product')->insert([
            array('name' => 'Waiting'),
            array('name' => 'On Progress'),
            array('name' => 'Finished'),
            array('name' => 'Delivered'),
            array('name' => 'Cancelled'),
        ]);
    }
}
