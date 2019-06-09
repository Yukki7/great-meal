<?php

use Illuminate\Database\Seeder;

class Items extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([[
            'name' => 'Tomato Curry',
            'description' => 'Natalie & Justin Cleaning by Justin Younger',
            'price' => '20',
            'image' => 'tomato-curry-2019-06-09-5cfc8ea08703a.jpg',
            'created_at' => '2019-06-09 04:38:34',
            'updated_at' => '2019-06-09 04:38:34',
        ],[
            'name' => 'Prawn Dish',
            'description' => 'Lorem ipsum dolor sit amet',
            'price' => '20',
            'image' => 'prawn-dish-2019-06-09-5cfc8ee23284e.jpg',
            'created_at' => '2019-06-09 04:38:34',
            'updated_at' => '2019-06-09 04:38:34',
        ],[
            'name' => 'Salad Dish',
            'description' => 'Consectetur adipisicing elit, sed do eiusmod',
            'price' => '18',
            'image' => 'salad-dish-2019-06-09-5cfc8f0bb0c16.jpg',
            'created_at' => '2019-06-09 04:38:34',
            'updated_at' => '2019-06-09 04:38:34',
        ],[
            'name' => 'Prawn Dish',
            'description' => 'Tempor incididunt ut labore et dolore',
            'price' => '15',
            'image' => 'prawn-dish-2019-06-09-5cfc8f438339c.jpg',
            'created_at' => '2019-06-09 04:38:34',
            'updated_at' => '2019-06-09 04:38:34',
        ],[
            'name' => 'Vegetable Dish',
            'description' => 'Magna aliqua. Ut enim ad minim veniam',
            'price' => '22',
            'image' => 'vegetable-dish-2019-06-09-5cfc8f6002854.jpg',
            'created_at' => '2019-06-09 04:38:34',
            'updated_at' => '2019-06-09 04:38:34',
        ],[
            'name' => 'Chicken Dish',
            'description' => 'Quis nostrud exercitation ullamco laboris',
            'price' => '21',
            'image' => 'chicken-dish-2019-06-09-5cfc8f7f05e15.jpg',
            'created_at' => '2019-06-09 04:38:34',
            'updated_at' => '2019-06-09 04:38:34',
        ],[
            'name' => 'Vegetable Noodles',
            'description' => 'Nisi ut aliquip ex ea commodo',
            'price' => '32',
            'image' => 'vegetable-noodles-2019-06-09-5cfc8fa58ff42.jpg',
            'created_at' => '2019-06-09 04:38:34',
            'updated_at' => '2019-06-09 04:38:34',
        ],[
            'name' => 'Special Salad',
            'description' => 'Duis aute irure dolor in reprehenderit',
            'price' => '30',
            'image' => 'special-salad-2019-06-09-5cfc8fc5a2f91.jpg',
            'created_at' => '2019-06-09 04:38:34',
            'updated_at' => '2019-06-09 04:38:34',
        ],[
            'name' => 'Ice-cream',
            'description' => 'Excepteur sint occaecat cupidatat non',
            'price' => '38',
            'image' => 'ice-cream-2019-06-09-5cfc8fe00d8cf.jpg',
            'created_at' => '2019-06-09 04:38:34',
            'updated_at' => '2019-06-09 04:38:34',
        ],]);
    }
}
