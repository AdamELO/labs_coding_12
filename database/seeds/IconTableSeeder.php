<?php

use Illuminate\Database\Seeder;

class IconTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icons')->insert([
            "icon" =>"flaticon-023-flask",
            "created_at" => now(),
        ]);
        DB::table('icons')->insert([
            "icon" =>"flaticon-011-compass",
            "created_at" => now(),
        ]);
        DB::table('icons')->insert([
            "icon" =>"flaticon-037-idea",
            "created_at" => now(),
        ]);
        DB::table('icons')->insert([
            "icon" =>"flaticon-039-vector",
            "created_at" => now(),
        ]);
        DB::table('icons')->insert([
            "icon" =>"flaticon-036-brainstorming",
            "created_at" => now(),
        ]);
        DB::table('icons')->insert([
            "icon" =>"flaticon-026-search",
            "created_at" => now(),
        ]);
        DB::table('icons')->insert([
            "icon" =>"flaticon-018-laptop-1",
            "created_at" => now(),
        ]);
        DB::table('icons')->insert([
            "icon" =>"flaticon-043-sketch",
            "created_at" => now(),
        ]);
        DB::table('icons')->insert([
            "icon" =>"flaticon-012-cube",
            "created_at" => now(),
        ]);
    }
}
