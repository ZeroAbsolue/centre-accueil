<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Salle::class, function (Faker $faker,$salle) {
    return [
        "type"=>strtoupper ($salle['type']),
        "name"=>$salle['name'],
        "area"=>$salle['area'],
        "sitting_place"=>$salle['sitting_place'],
        "description"=>$faker->text
    ];
});
