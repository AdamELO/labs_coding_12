<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialTableSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        DB::table( 'testimonials' )->insert( [
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'name' => 'Smith',
            'prename' => 'Michael',
            'fonction' => 'CEO Company',
            'img' => '/img/avatar/01.jpg',
        ] );
        DB::table( 'testimonials' )->insert( [
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'name' => 'Smith',
            'prename' => 'Michael',
            'fonction' => 'CEO Company',
            'img' => '/img/avatar/02.jpg',
        ] );
        DB::table( 'testimonials' )->insert( [
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'name' => 'Smith',
            'prename' => 'Michael',
            'fonction' => 'CEO Company',
            'img' => '/img/avatar/01.jpg',
        ] );
        DB::table( 'testimonials' )->insert( [
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'name' => 'Smith',
            'prename' => 'Michael',
            'fonction' => 'CEO Company',
            'img' => '/img/avatar/02.jpg',
        ] );
        DB::table( 'testimonials' )->insert( [
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'name' => 'Smith',
            'prename' => 'Michael',
            'fonction' => 'CEO Company',
            'img' => '/img/avatar/01.jpg',
        ] );
        DB::table( 'testimonials' )->insert( [
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'name' => 'Smith',
            'prename' => 'Michael',
            'fonction' => 'CEO Company',
            'img' => '/img/avatar/02.jpg',
        ] );
    }
}
