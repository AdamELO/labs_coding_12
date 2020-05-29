<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        DB::table( 'users' )->insert( [
            'name' => 'The Labs',
            'prenom' => 'Projet',
            'email' => 'projet12codingschool@gmail.com',
            'password' => bcrypt( 'projet12codingschool@gmail.com' ),
            'role_id' => 1,
            'img'=>'/img/logo.jpg',
            'created_at' => now()
        ] );
        DB::table( 'users' )->insert( [
            'name'=> 'Elo',
            'prenom' => 'Adam',
            'email'=> 'adam@example.com',
            'password'=> bcrypt( 'adam@example.com' ),
            'role_id' => 2,
            'img'=>'/img/avatar/03.jpg',
            'description'=>'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
            'created_at' => now()
        ] );
        DB::table( 'users' )->insert( [
            'name'=> 'Smith',
            'prenom' => 'Michel',
            'email'=> 'membre@example.com',
            'password'=> bcrypt( 'membre@example.com' ),
            'role_id' => 4,
            'img'=>'/img/avatar/01.jpg',
            'created_at' => now()
        ] );
        DB::table( 'users' )->insert( [
            'name'=> 'Jones',
            'prenom' => 'Michelle',
            'email'=> 'member@example.com',
            'password'=> bcrypt( 'member@example.com' ),
            'role_id' => 4,
            'img'=>'/img/logo.jpg',
            'created_at' => now()
        ] );
        DB::table( 'users' )->insert( [
            'name'=> 'Kardash',
            'prenom'=> 'Ayhan',
            'email'=> 'test@example.com',
            'password'=> bcrypt( 'test@example.com' ),
            'role_id' => 3,
            'img'=>'/img/avatar/03.jpg',
            'description'=>'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
            'created_at' => now()
        ] );
    }
}
