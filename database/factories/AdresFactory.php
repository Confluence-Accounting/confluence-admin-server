<?php

use Faker\Generator as Faker;

$factory->define(App\Adres::class, function (Faker $faker) {
    
    $accountant = App\Accountant::orderByRaw('RAND()')->first();
    
    return [
        'housenumber' => $faker->buildingNumber(),
        'street' => $faker->streetName(),
        'zipcode' =>$faker->postcode(),
        'country' => "Belgium",
        'accountant_id'=>$accountant->id
    ];
});
