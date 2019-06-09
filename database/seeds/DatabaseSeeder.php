<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Users::class,
            Sliders::class,
            Categories::class,
            Items::class,
            CategoryItem::class,
            Reservations::class,
            Contacts::class,
            ]);
    }
}
