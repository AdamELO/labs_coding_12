<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreTableSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        DB::table( 'titres' )->insert( [
            'presentation' => 'Get in (the Lab) and discover the world',
            'testimonial' => 'What our client say',
            'team' => 'Get in (the lab) and meet the team',
            'service' => 'Get in (the lab) and see the services',
            'serviceprim' => 'Get in (the lab) and discover the world',
            'contact' => 'Contact us',
        ] );
    }
}
