<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Charlie',
            'email' => 'charliechip95@gmail.com',
            'password' => Hash::make('123456')
        ],
        [
            'name' => 'GoodDude',
            'email' => 'gooddude@gmail.com',
            'password' => Hash::make('123456')
        ]);
    }
}