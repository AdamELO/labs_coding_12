<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        DB::table( 'roles' )->insert( [
            'name' => 'Administrateur'
        ] );
        DB::table( 'roles' )->insert( [
            'name' => 'Webmaster'
        ] );
        DB::table( 'roles' )->insert( [
            'name' => 'Rédacteur'
        ] );
        DB::table( 'roles' )->insert( [
            'name' => 'Membre'
        ] );
    }
}
