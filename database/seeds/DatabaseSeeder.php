<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UsersTableSeeder');
        $this->call('EventTableSeeder');
        $this->call('UserEventSeeder');
        $this->call('PlaceTableSeeder');
        $this->call('UsersFriendsTableSeeder');
    }
}
