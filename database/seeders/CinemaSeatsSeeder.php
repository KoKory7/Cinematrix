<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CinemaSeatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $count = 1; // El contador inicia en 1

        // while($count == 40) { //  hasta que count sea igual a 40 no se va a detener
        //     DB::table('cinema_seats')->insert([
        //         'seat_number' => 'n_'.$count, // ingresamos n_ y el valor del contador
        //     ]);
        //     $count = ++; // le sumamos 1 a el contador y se repite el ciclo nuevamente
        // }

        $seats = [
            ['seat_number' => 'n1'],
            ['seat_number' => 'n2'],
            ['seat_number' => 'n3'],
            ['seat_number' => 'n4'],
            ['seat_number' => 'n5'],
            ['seat_number' => 'n6'],
            ['seat_number' => 'n7'],
            ['seat_number' => 'n8'],
            ['seat_number' => 'n9'],
            ['seat_number' => 'n10'],
            ['seat_number' => 'n11'],
            ['seat_number' => 'n12'],
            ['seat_number' => 'n13'],
            ['seat_number' => 'n14'],
            ['seat_number' => 'n15'],
            ['seat_number' => 'n16'],
            ['seat_number' => 'n17'],
            ['seat_number' => 'n18'],
            ['seat_number' => 'n19'],
            ['seat_number' => 'n20'],
            ['seat_number' => 'n21'],
            ['seat_number' => 'n22'],
            ['seat_number' => 'n23'],
            ['seat_number' => 'n24'],
            ['seat_number' => 'n25'],
            ['seat_number' => 'n26'],
            ['seat_number' => 'n27'],
            ['seat_number' => 'n28'],
            ['seat_number' => 'n29'],
            ['seat_number' => 'n30'],
            ['seat_number' => 'n31'],
            ['seat_number' => 'n32'],
            ['seat_number' => 'n33'],
            ['seat_number' => 'n34'],
            ['seat_number' => 'n35'],
            ['seat_number' => 'n36'],
            ['seat_number' => 'n37'],
            ['seat_number' => 'n38'],
            ['seat_number' => 'n39'],
            ['seat_number' => 'n40'],
        ];

        DB::table('cinema_seats')->insert($seats);

    }
}
