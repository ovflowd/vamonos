<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('places')->insert([
            'name' => "Campo do joão",
            'lat' => -22,
            'long' => -44,
            'distanceTime' => 300,
            'distanceKm' => 720,
            'totalPrice' => 300,
            'event_id' => 1
        ]);

        DB::table('places')->insert([
            'name' => "Colesterol",
            'lat' => -22.5,
            'long' => -43.8,
            'distanceTime' => 100,
            'distanceKm' => 340,
            'totalPrice' => 60,
            'event_id' => 1
        ]);
    }
}
