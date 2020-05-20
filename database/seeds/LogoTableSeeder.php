<?php

use Illuminate\Database\Seeder;

class LogoTableSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        DB::table( 'logos' )->insert( [
            'logo' => '/img/big-logo.png',
        ] );
    }
}
