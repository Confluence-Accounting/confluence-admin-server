<?php

use Faker\Generator as Faker;

$factory->define(App\Bookkeeping::class, function (Faker $faker) {
   
    return [
        'name' => $faker->company(),
    
    ];
});
