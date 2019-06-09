<?php

use Illuminate\Database\Seeder;

class Sliders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([[
            'title' => 'BEST FOOD',
            'sub_title' => 'Create your own slogan',
            'image' => 'best-food-2019-06-09-5cfc8d4a4c926.jpg',
            'created_at' => '2019-06-09 04:38:34',
            'updated_at' => '2019-06-09 04:38:34',
        ],[
            'title' => 'BEST SNACKS',
            'sub_title' => 'Create your own slogan',
            'image' => 'best-snacks-2019-06-09-5cfc8dd0c568c.jpg',
            'created_at' => '2019-06-09 04:40:48',
            'updated_at' => '2019-06-09 04:40:48',
        ],[
            'title' => 'BEST DRINK',
            'sub_title' => 'Create your own slogan',
            'image' => 'best-drink-2019-06-09-5cfc8ddda4e3c.jpg',
            'created_at' => '2019-06-09 04:41:01',
            'updated_at' => '2019-06-09 04:41:01',
        ]]);
    }
}
