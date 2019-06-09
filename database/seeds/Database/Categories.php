<?php

use Illuminate\Database\Seeder;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([[
            'name' => 'Breakfast',
            'slug' => 'breakfast',
            'created_at' => '2019-06-09 04:38:34',
            'updated_at' => '2019-06-09 04:38:34',
        ],[
            'name' => 'Special',
            'slug' => 'special',
            'created_at' => '2019-06-09 04:38:34',
            'updated_at' => '2019-06-09 04:38:34',
        ],[
            'name' => 'Desert',
            'slug' => 'desert',
            'created_at' => '2019-06-09 04:38:34',
            'updated_at' => '2019-06-09 04:38:34',
        ],[
            'name' => 'Dinner',
            'slug' => 'dinner',
            'created_at' => '2019-06-09 04:38:34',
            'updated_at' => '2019-06-09 04:38:34',
        ],]);
    }
}
