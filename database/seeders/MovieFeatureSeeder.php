<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie_features')->insert([
            "movie_name" => "Freddy Krueger the Movie",
            "start_time" => "2022-11-17 21:00:00",
            "end_time"   => "2022-11-17 23:00:00"
        ]);
    }
}
