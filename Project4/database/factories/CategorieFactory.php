<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\modele\Categorie;
use Faker\Generator as Faker;

$factory->define(Categorie::class, function (Faker $faker) {
    return [
        'libelle' => $faker->sentence(1,false)
    ];
});
