<?php

use Faker\Generator as Faker;

$factory->define(App\Adres::class, function (Faker $faker) {
    $numbers='';
    
    for($i=0;$i<9;$i++)
    {
        $numbers.='' . rand(0,9);
    }
    
    return [
        'housenumber' => $faker->buildingNumber(),
        'street' => $faker->streetName(),
        'zipcode' =>$faker->postcode(),
        'country' => "Belgium"
        
    ];
});
