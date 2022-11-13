<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Korina Cifuentes',
            'email' => 'admin@admin.com',
            'role' => 'admin',
        ]);

        $this->call([
            CinemaSeatsSeeder::class,
            MovieFeatureSeeder::class,
        ]);
    }
}
