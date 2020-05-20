<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SloganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'slogans' )->insert( [
            'title' => 'Get your freebie template now!',
        ] );
    }
}
