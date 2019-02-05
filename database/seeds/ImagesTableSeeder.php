<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'imageable_type' => 'Chambre',
            'imageable_id'=>'1',
            'url' =>'img/Chambre/IMG_0593.jpg',
        ]);

        DB::table('images')->insert([
            'imageable_type' => 'Chambre',
            'imageable_id'=>'2',
            'url' =>'img/Chambre/IMG_0598.jpg',
        ]);

        DB::table('images')->insert([
            'imageable_type' => 'Chambre',
            'imageable_id'=>'5',
            'url' =>'img/Chambre/IMG_0603.jpg',
        ]);

        DB::table('images')->insert([
            'imageable_type' => 'Chambre',
            'imageable_id'=>'4',
            'url' =>'img/Chambre/IMG_0667.jpg',
        ]);

        DB::table('images')->insert([
            'imageable_type' => 'Chambre',
            'imageable_id'=>'4',
            'url' =>'img/Chambre/IMG_0609.jpg',
        ]);

        DB::table('images')->insert([
            'imageable_type' => 'Chambre',
            'imageable_id'=>'1',
            'url' =>'img/Chambre/IMG_0622.jpg',
        ]);

        DB::table('images')->insert([
            'imageable_type' => 'Chambre',
            'imageable_id'=>'2',
            'url' =>'img/Chambre/IMG_0617.jpg',
        ]);

        DB::table('images')->insert([
            'imageable_type' => 'Chambre',
            'imageable_id'=>'3',
            'url' =>'img/Chambre/IMG_0607.jpg',
        ]);

        DB::table('images')->insert([
            'imageable_type' => 'Chambre',
            'imageable_id'=>'5',
            'url' =>'img/Chambre/IMG_0619.jpg',
        ]);

        DB::table('images')->insert([
            'imageable_type' => 'Chambre',
            'imageable_id'=>'1',
            'url' =>'img/Chambre/IMG_0622.jpg',
        ]);

        DB::table('images')->insert([
            'imageable_type' => 'Chambre',
            'imageable_id'=>'6',
            'url' =>'img/Chambre/IMG_0633.jpg',
        ]);

        DB::table('images')->insert([
            'imageable_type' => 'Chambre',
            'imageable_id'=>'3',
            'url' =>'img/Chambre/IMG_0651.jpg',
        ]);

        DB::table('images')->insert([
            'imageable_type' => 'Chambre',
            'imageable_id'=>'5',
            'url' =>'img/Chambre/IMG_0652.jpg',
        ]);

        DB::table('images')->insert([
            'imageable_type' => 'Chambre',
            'imageable_id'=>'6',
            'url' =>'img/Chambre/IMG_0665.jpg',
        ]);

        DB::table('images')->insert([
            'imageable_type' => 'Chambre',
            'imageable_id'=>'5',
            'url' =>'img/Chambre/IMG_0666.jpg',
        ]);

        DB::table('images')->insert([
            'imageable_type' => 'Chambre',
            'imageable_id'=>'3',
            'url' =>'img/Chambre/IMG_0690.jpg',
        ]);

        DB::table('images')->insert([
            'imageable_type' => 'Salle',
            'imageable_id'=>'1',
            'url' =>'img/Salle/219db961b9a61b662ae2e00760bb75f2.jpg',
        ]);

        DB::table('images')->insert([
            'imageable_type' => 'Salle',
            'imageable_id'=>'1',
            'url' =>'img/Salle/c4120b2a29d2e1aaba5d6f912f4e8b86.jpg',
        ]);

        DB::table('images')->insert([
            'imageable_type' => 'Salle',
            'imageable_id'=>'2',
            'url' =>'img/Salle/fete.jpg',
        ]);

        DB::table('images')->insert([
            'imageable_type' => 'Salle',
            'imageable_id'=>'2',
            'url' =>'img/Salle/IMG_0543.jpg',
        ]);

        DB::table('images')->insert([
            'imageable_type' => 'Salle',
            'imageable_id'=>'1',
            'url' =>'img/Salle/9be7e28cb0fe106e846046265e426056.jpg',
        ]);

        DB::table('images')->insert([
            'imageable_type' => 'Salle',
            'imageable_id'=>'1',
            'url' =>'img/Salle/IMG-20181012-WA0023.jpg',
        ]);
    }
}
