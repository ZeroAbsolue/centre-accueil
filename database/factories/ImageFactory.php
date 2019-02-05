<?php

use Faker\Generator as Faker;

$factory->define(
/**
 * Fonction permettant de generer les images
 * @param Faker $faker
 * @param $image
 * @return array
 */
    App\Model\Image::class, function ( Faker $faker, $image) {
    return [
        "imageable_type"=>strtoupper ($image['imageable_type']),
        "imageable_id"=>strtoupper ($image['imageable_id ']),
        "url"=>$faker->image ("public/img",640,480,false,true),
    ];
});
