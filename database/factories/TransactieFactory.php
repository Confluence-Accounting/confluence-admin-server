<?php

use Faker\Generator as Faker;

$factory->define(App\Transactie::class, function (Faker $faker) {
    $numbers='';
    
    for($i=0;$i<9;$i++)
    {
        $numbers.='' . rand(0,9);
    }
    
    return [
        'accountnumber' => $faker->buildingNumber(),
        'customername' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'amount' =>$faker->postcode(),
        'date' => => $faker->date($format = 'Y-m-d', $max = 'now')
});
