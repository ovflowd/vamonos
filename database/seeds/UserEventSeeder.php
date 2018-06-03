<?php

use Illuminate\Database\Seeder;

class UserEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events_users')->insert([
            'event_id' => 1,
            'user_id' => 2
        ]);

        DB::table('events_users')->insert([
            'event_id' => 1,
            'user_id' => 3
        ]);
    }
}
