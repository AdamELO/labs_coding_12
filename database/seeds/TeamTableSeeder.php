<?php

use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        DB::table( 'teams' )->insert( [
            'name' => 'Williams',
            'prename' => 'Christinne',
            'img' => '/img/team/1.jpg',
            'fonction' => 'Project manager',
        ] );
        DB::table( 'teams' )->insert( [
            'name' => 'Williams',
            'prename' => 'Christinne',
            'img' => '/img/team/2.jpg',
            'fonction' => 'Digital Designer',
        ] );
        DB::table( 'teams' )->insert( [
            'name' => 'Williams',
            'prename' => 'Christinne',
            'img' => '/img/team/3.jpg',
            'fonction' => 'CEO',
        ] );
    }
}
