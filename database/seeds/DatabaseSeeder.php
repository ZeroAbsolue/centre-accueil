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
            ChambresTableSeeder::class,
            SallesTableSeeder::class,
            ImagesTableSeeder::class,
            StatesTableSeeder::class,
            UsersTableSeeder::class,
            RolesTableSeeder::class,
        ]);
    }
}
