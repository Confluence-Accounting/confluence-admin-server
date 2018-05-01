<?php

use Faker\Generator as Faker;

$factory->define(App\Bookkeeping::class, function (Faker $faker) {
    $license = App\License::orderByRaw('RAND()')->first();
    return [
        'name' => $faker->company(),
        'license_id'=>$license->id
    ];
});
