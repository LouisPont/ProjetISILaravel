<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\modele\Film;
use Faker\Generator as Faker;

$factory->define(Film::class, function (Faker $faker) {
    return [
        'titre' => $faker->sentence(1,false),
        'anneeSortie' => $faker->year(),
        'description' => $faker->sentence(12,false),
        'categorie_id'=> $faker->numberBetween(1,10),
    ];
});
