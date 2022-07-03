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
        // \App\Models\User::factory(10)->create();
        $this->call([
            RelASeeder::class,
            RelBSeeder::class,
            RelCSeeder::class,
            RelDSeeder::class,
            RelESeeder::class,
            RelFSeeder::class,
            UserSeeder::class,
            DokumenSeeder::class,
            PerangkatDaerahSeeder::class,
        ]);
    }
}
