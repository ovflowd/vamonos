<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_events')->insert([
            'event_id' => 1,
            'user_id' => 2
        ]);

        DB::table('user_events')->insert([
            'event_id' => 1,
            'user_id' => 3
        ]);
    }
}
