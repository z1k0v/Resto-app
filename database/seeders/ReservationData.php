<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        Reservation::truncate();
        Reservation::create([
            "customer"=> "test",
            "phone"=> "70453050",
            "guests"=> "4",
            "datentime"=> "2024-02-02 02:02:02"

        ]);
        Reservation::create([
            "customer"=> "test2",
            "phone"=> "70453051",
            "guests"=> "3",
            "datentime"=> "2024-02-02 02:02:02"

        ]);
        Reservation::create([
            "customer"=> "test3",
            "phone"=> "70453052",
            "guests"=> "11",
            "datentime"=> "2024-02-02 02:02:02"

        ]);
    }
}
