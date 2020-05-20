<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannercarTableSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        DB::table( 'bannercars' )->insert( [
            'img' => '/img/01.jpg',
        ] );
        DB::table( 'bannercars' )->insert( [
            'img' => '/img/02.jpg',
        ] );
    }
}
