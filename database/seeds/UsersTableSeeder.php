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
                    'name' => 'Nkouekam Mbouga Wilfried',
                    'phone'=>'670371236',
                    'email' =>'nkouekamwilfried@gmail.com',
                    'password' => bcrypt('Internet@4'),
                ]);
        DB::table('users')->insert([
                    'name' => 'Kadji Christian',
                    'phone'=>'694490201',
                    'email' =>'kadjichristian237@gmail.com',
                    'password' => bcrypt('kadji237'),
                ]);
    }
}
