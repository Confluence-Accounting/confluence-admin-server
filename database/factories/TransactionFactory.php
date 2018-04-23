<?php

use Faker\Generator as Faker;

$factory->define(App\Transaction::class, function (Faker $faker) {
    $numbers='';
    
    for($i=0;$i<9;$i++)
    {
        $numbers.='' . rand(0,9);
    }
    
    return [
        'accountnumber' => $faker->buildingNumber(),
        'customername' => $faker->firstNameMale(),
        'amount' => $numbers . "Euro",
        'date' => $faker->date('d-m-Y')
        ];
});
