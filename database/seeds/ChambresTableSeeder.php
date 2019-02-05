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
        $chambres = Array(
            "0"=>array(
                "name"=>"CHAMBRE 101",
                "area"=>"16*16",
            ),
            "1"=>array(
                "name"=>"CHAMBRE 102",
                "area"=>"16*16",
            ),
            "2"=>array(
                "name"=>"CHAMBRE 103",
                "area"=>"16*16",
            ),
            "3"=>array(
                "name"=>"CHAMBRE 201",
                "area"=>"16*16",
            ),
            "4"=>array(
                "name"=>"CHAMBRE 202",
                "area"=>"16*16",
            ),
            "5"=>array(
                "name"=>"CHAMBRE 203",
                "area"=>"16*16",
            ),
        );

        foreach ($chambres as $chambre){
            factory(App\Model\Chambre::class, 1)->create($chambre);
        }
    }
}
