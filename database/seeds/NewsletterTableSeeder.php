<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsletterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('newsletters')->insert([
        'email' => 'test@newsletter.com'
        ]);
    }
}
