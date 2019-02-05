<?php

use Illuminate\Database\Seeder;

class SallesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('Salles')->insert([
            "type"=>"CONFERENCE",
            "name"=>"SALLE DE CONFÉRENCE",
            "area"=>"25*15",
            "sitting_place"=>"200",
        ]);

        DB::table('Salles')->insert([
            "type"=>"BANQUET",
            "name"=>"SALLE DE FÊTE",
            "area"=>"15*50",
            "sitting_place"=>"300",
        ]);

    }
}
