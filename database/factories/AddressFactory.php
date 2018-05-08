<?php

use Faker\Generator as Faker;

$factory->define(App\Address::class, function (Faker $faker) {
    
    return [
        'housenumber' => $faker->buildingNumber(),
        'street' => $faker->streetName(),
        'zipcode' =>$faker->postcode(),
        'country' => "Belgium",
        'telephone' => "032965485"
    ];
});
