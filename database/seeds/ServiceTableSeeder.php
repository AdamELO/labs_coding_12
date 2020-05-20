<?php

use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            "icon_id" =>1,
            "title"=>"Get in the lab",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),
            ]);
        DB::table('services')->insert([
            "icon_id" =>2,
            "title"=>"Projects online",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),
            ]);
        DB::table('services')->insert([
            "icon_id" =>3,
            "title"=>"SMART MARKETING",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),
            ]);
        DB::table('services')->insert([
            "icon_id" =>4,
            "title"=>"Social Media",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),
            ]);
        DB::table('services')->insert([
            "icon_id" =>5,
            "title"=>"Brainstorming",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),
            ]);
        DB::table('services')->insert([
            "icon_id" =>6,
            "title"=>"Documented",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),
            ]);
        DB::table('services')->insert([
            "icon_id" =>7,
            "title"=>"Responsive",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),
            ]);
        DB::table('services')->insert([
            "icon_id" =>8,
            "title"=>"Retina ready",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),
            ]);
        DB::table('services')->insert([
            "icon_id" =>9,
            "title"=>"Ultra modern",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),
            ]);
    }
}
