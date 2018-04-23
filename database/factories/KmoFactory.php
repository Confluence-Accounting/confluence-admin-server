<?php

use Faker\Generator as Faker;

$factory->define(App\Accountant::class, function (Faker $faker) {
    $numbers='';
    
    for($i=0;$i<9;$i++)
    {
        $numbers.='' . rand(0,9);
    }
    
    return [
        'vat' => "BE" . $numbers,
        'name' => $faker->company()
    ];
});
