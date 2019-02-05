<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Chambre::class, function (Faker $faker,$chambre) {
    return [
        "name"=>strtoupper ($chambre['name']),
        "description"=>$faker->text,
        "area"=>$chambre['area'],
    ];
});
