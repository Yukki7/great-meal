<?php

use Illuminate\Database\Seeder;

class Contacts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([[
            'name' => 'Customer A',
            'email' => 'customera@gmail.com',
            'subject' => 'Lorem ipsum',
            'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'created_at' => '2019-06-09 04:38:34',
            'updated_at' => '2019-06-09 04:38:34',
        ],[
            'name' => 'Customer A',
            'email' => 'customera@gmail.com',
            'subject' => 'Lorem ipsum',
            'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'created_at' => '2019-06-09 04:38:34',
            'updated_at' => '2019-06-09 04:38:34',
        ],[
            'name' => 'Customer A',
            'email' => 'customera@gmail.com',
            'subject' => 'Lorem ipsum',
            'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'created_at' => '2019-06-09 04:38:34',
            'updated_at' => '2019-06-09 04:38:34',
        ],[
            'name' => 'Customer A',
            'email' => 'customera@gmail.com',
            'subject' => 'Lorem ipsum',
            'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'created_at' => '2019-06-09 04:38:34',
            'updated_at' => '2019-06-09 04:38:34',
        ],]);
    }
}
