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
        DB::Table('users')->insert([
            "name"=>"Adam",
            "email"=>"Adam@molengeek.com",
            "password"=>"hello",
            "created_at"=>now()
        ]);
        DB::Table('users')->insert([
            "name"=>"Nesrine",
            "email"=>"Nesrine@molengeek.com",
            "password"=>"hello",
            "created_at"=>now()
        ]);
    }
}
