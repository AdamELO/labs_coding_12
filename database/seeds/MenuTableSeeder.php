<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
        'lien1' => 'Home',
        'lien2' => 'Services',
        'lien3' => 'Blog',
        'lien4' => 'Contact',
        ]);
    }
}
