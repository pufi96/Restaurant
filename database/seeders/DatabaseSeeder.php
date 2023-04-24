<?php

namespace Database\Seeders;

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
            NavSeeder::class,
            CategorySeeder::class,
            MenuSeeder::class,
            RoleSeeder::class,
            UserSeeder::class
        ]);
    }
}
