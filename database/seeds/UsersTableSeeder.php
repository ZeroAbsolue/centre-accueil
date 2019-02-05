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
                    'email' =>'nkouekamwilfried.com',
                    'password' => bcrypt('Internet@4'),
                ]);
    }
}
