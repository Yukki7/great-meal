<?php

use Illuminate\Database\Seeder;

class Reservations extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([[
            'name' => 'Customer A',
            'phone' => '0919999999',
            'email' => 'customera@gmail.com',
            'date_and_time' => '30-06-2019 14:00',
            'message' => 'Lorem ipsum',
            'status' => '0',
            'created_at' => '2019-06-09 04:38:34',
            'updated_at' => '2019-06-09 04:38:34',
        ],[
            'name' => 'Customer A',
            'phone' => '0919999999',
            'email' => 'customera@gmail.com',
            'date_and_time' => '30-06-2019 14:00',
            'message' => 'Lorem ipsum',
            'status' => '0',
            'created_at' => '2019-06-09 04:38:34',
            'updated_at' => '2019-06-09 04:38:34',
        ],[
            'name' => 'Customer A',
            'phone' => '0919999999',
            'email' => 'customera@gmail.com',
            'date_and_time' => '30-06-2019 14:00',
            'message' => 'Lorem ipsum',
            'status' => '1',
            'created_at' => '2019-06-09 04:38:34',
            'updated_at' => '2019-06-09 04:38:34',
        ],[
            'name' => 'Customer A',
            'phone' => '0919999999',
            'email' => 'customera@gmail.com',
            'date_and_time' => '30-06-2019 14:00',
            'message' => 'Lorem ipsum',
            'status' => '1',
            'created_at' => '2019-06-09 04:38:34',
            'updated_at' => '2019-06-09 04:38:34',
        ],]);
    }
}
