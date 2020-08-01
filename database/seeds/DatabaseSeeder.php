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
        factory(App\User::class, 500)->create();
        factory(App\Location::class, 5)->create();
        factory(App\Item::class, 500)->create();

    }
}
