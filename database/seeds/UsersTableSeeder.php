<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Thiago",
            'email' => 'thiago@gmail.com',
            'lat' => '-21.83',
            'long' => '-24.665',
            'password' => app('hash')->make('123456')
        ]);

        DB::table('users')->insert([
            'name' => "Claudio",
            'email' => 'claudio@gmail.com',
            'lat' => '-21.13',
            'long' => '-24.665',
            'password' => app('hash')->make('123456')
        ]);

        DB::table('users')->insert([
            'name' => "Vedolin",
            'email' => 'vedolin@gmail.com',
            'lat' => '-21.33',
            'long' => '-24.165',
            'password' => app('hash')->make('123456')
        ]);

        DB::table('users')->insert([
            'name' => "Thamires",
            'email' => 'thamires@gmail.com',
            'lat' => '-21.53',
            'long' => '-24.765',
            'password' => app('hash')->make('123456')
        ]);
    }
}
