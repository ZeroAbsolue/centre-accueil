<?php

use Illuminate\Database\Seeder;

class ChambresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('chambres')->insert([
            'name' => 'CHAMBRE 101',
            'area'=>'16*16'
        ]);

        DB::table('chambres')->insert([
            'name' => 'CHAMBRE 102',
            'area'=>'16*16'
        ]);

        DB::table('chambres')->insert([
            'name' => 'CHAMBRE 103',
            'area'=>'16*16'
        ]);

        DB::table('chambres')->insert([
            'name' => 'CHAMBRE 201',
            'area'=>'16*16'
        ]);

        DB::table('chambres')->insert([
            'name' => 'CHAMBRE 202',
            'area'=>'16*16'
        ]);

        DB::table('chambres')->insert([
            'name' => 'CHAMBRE 203',
            'area'=>'16*16'
        ]);
    }
}
