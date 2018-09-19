<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            array('name' => 'Aplikasi dan Pengembang Permainan'),
            array('name' => 'Arsitektur'),
            array('name' => 'Design Interior'),
            array('name' => 'Design Komunikasi Visual'),
            array('name' => 'Design Product'),
            array('name' => 'Fashion'),
            array('name' => 'Film, Animasi, Dan Video'),
            array('name' => 'Fotografi'),
            array('name' => 'Kriya'),
            array('name' => 'Kuliner'),
            array('name' => 'Musik'),
            array('name' => 'Penerbitan'),
            array('name' => 'Periklanan'),
            array('name' => 'Seni Pertunjukan'),
            array('name' => 'Seni Rupa'),
            array('name' => 'Televisi dan Radio'),
        ]);
    }
}
