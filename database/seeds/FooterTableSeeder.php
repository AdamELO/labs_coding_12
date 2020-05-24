<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
        'footer' => '2017 All rights reserved. Designed by Colorlib'
        ]);
    }
}
