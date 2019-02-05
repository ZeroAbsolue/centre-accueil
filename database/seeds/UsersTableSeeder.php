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
                    'name' => str_random(10),
                    'phone'=>'670371236',
                    'email' =>'t@t.@gmail.com',
                    'password' => bcrypt('12345678'),
                ]);
    }
}
