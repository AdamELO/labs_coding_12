<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'btn' => 'Send',
            'email' => 'hello@company.com',
            'adresse' => 'C/ Libertad, 34',
            'subtitle' => 'Main Office',
            'localite' => '05200 Arévalo',
            'text' => 'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.',
            'phone' => '0034 37483 2445 322',
            ]);
    }
}
