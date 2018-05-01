<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
  
    return [
        
        'name' => $faker->company(),
        'email' => $faker->email(),
        'password' => $faker->password()
    ];
});
