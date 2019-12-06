<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
          'name' => 'test',
          'email' => 'test@test.com',
          'password' => 'test'
        ])
    }
}
