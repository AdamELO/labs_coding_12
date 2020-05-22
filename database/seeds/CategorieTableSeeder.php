<?php

use Illuminate\Database\Seeder;

class CategorieTableSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        DB::table( 'categories' )->insert( [
            'name' => 'Monde',
        ] );
        DB::table( 'categories' )->insert( [
            'name' => 'Mode',
        ] );
        DB::table( 'categories' )->insert( [
            'name' => 'Sport',
        ] );
        DB::table( 'categories' )->insert( [
            'name' => 'Politique',
        ] );
        DB::table( 'categories' )->insert( [
            'name' => 'Animaux',
        ] );
        DB::table( 'categories' )->insert( [
            'name' => 'Business',
        ] );
    }
}
