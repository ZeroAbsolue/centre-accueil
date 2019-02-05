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
        $images = Array(
            "0"=>Array(
                "imageable_type"=>"CHAMBRES",
                "imageable_id"=>random_int (1,6),
            ),
            "1"=>Array(
                "imageable_type"=>"SALLES",
                "imageable_id"=>random_int (1,2),
            ),
        );

        for ($i = 0; $i<15; $i++){
            $images[0]['imageable_id']=random_int (1,6);
            factory(App\Model\Image::class, 1)->create($images[0]);
        }
        for ($i = 0; $i<7; $i++){
            $images[1]['imageable_id']=random_int (1,2);
            factory(App\Model\Image::class, 1)->create($images[1]);
        }
    }
}
