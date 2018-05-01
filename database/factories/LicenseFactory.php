<?php

use Faker\Generator as Faker;

$factory->define(App\License::class, function (Faker $faker) {
    $accountant = App\Accountant::orderByRaw('RAND()')->first();
    return [
        'status' => "PRO",
        'accountant_id'=>$accountant->id
    ];
});
