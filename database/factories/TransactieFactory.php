<?php

use Faker\Generator as Faker;

$factory->define(App\Transactie::class, function (Faker $faker) {
    $numbers='';
    
    for($i=0;$i<9;$i++)
    {
        $numbers.='' . rand(0,9);
    }
    
    return [
        'accountnumber' => $numbers . "Euro",
        'customername' => $faker->name(),
        'amount' =>$faker->postcode(),
        'date' => $faker->date($format = 'Y-m-d', $max = 'now')
        ];
});
