<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = array("En attente de validation","Valider","Annuler","Confirmer","Supprimer");

        foreach ($states as $state)
        {
            DB::table('states')->insert([
                'name' => $state
            ]);
        }
    }
}
