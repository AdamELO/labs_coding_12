<?php

use Illuminate\Database\Seeder;

class ServiceprimTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('serviceprims')->insert([
        'btn' => 'Browse'
        ]);
    }
}
