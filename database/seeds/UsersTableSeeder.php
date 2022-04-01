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
            [
              'name' => 'あああ',
              'email' => 'test1@test.com',
              'password' => Hash::make('password123'),
            ],
            [
              'name' => 'えええ',
              'email' => 'test2@test.com',
              'password' => Hash::make('password345'),
            ],
            [
              'name' => 'おおお',
              'email' => 'test3@test.com',
              'password' => Hash::make('password345'),
            ],
        ]);
    }
}
