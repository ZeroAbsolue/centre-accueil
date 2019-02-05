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
        $salles = Array(
            "0"=>Array(
                "type"=>"CONFERENCE",
                "name"=>"SALLE DE CONFÉRENCE",
                "area"=>"25*15",
                "sitting_place"=>"200",
            ),
            "1"=>Array(
                "type"=>"BANQUET",
                "name"=>"SALLE DE FÊTE",
                "area"=>"15*50",
                "sitting_place"=>"300",
            ),
        );

        foreach ($salles as $salle) {
            factory(App\Model\Salle::class, 1)->create($salle);
        }
    }
}
