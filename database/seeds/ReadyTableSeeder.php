<?php

use Illuminate\Database\Seeder;

class ReadyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('readies')->insert([
        'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.',
        'title' => 'Are you ready to stand out?',
        'btn' => 'Browse'
        ]);
    }
}
