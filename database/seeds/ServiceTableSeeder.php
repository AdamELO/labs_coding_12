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
            "icon_id" =>23,
            "title"=>"Get in the lab",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),
            ]);
        DB::table('services')->insert([
            "icon_id" =>11,
            "title"=>"Projects online",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),
            ]);
        DB::table('services')->insert([
            "icon_id" =>37,
            "title"=>"SMART MARKETING",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),
            ]);
        DB::table('services')->insert([
            "icon_id" =>39,
            "title"=>"Social Media",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),
            ]);
        DB::table('services')->insert([
            "icon_id" =>36,
            "title"=>"Brainstorming",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),
            ]);
        DB::table('services')->insert([
            "icon_id" =>26,
            "title"=>"Documented",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),
            ]);
        DB::table('services')->insert([
            "icon_id" =>18,
            "title"=>"Responsive",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),
            ]);
        DB::table('services')->insert([
            "icon_id" =>43,
            "title"=>"Retina ready",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),
            ]);
        DB::table('services')->insert([
            "icon_id" =>12,
            "title"=>"Ultra modern",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),
            ]);
    }
}
