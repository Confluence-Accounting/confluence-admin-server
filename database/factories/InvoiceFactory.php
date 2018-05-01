<?php

use Faker\Generator as Faker;

$factory->define(App\Invoice::class, function (Faker $faker) {
  
    $accountant = App\Accountant::orderByRaw('RAND()')->first();
    $numbers='';
    
    for($i=0;$i<9;$i++)
    {
        $numbers.='' . rand(0,9);
    }
    
    
    return [
        'vat' => "BE" . $numbers,
        'name' => $faker->company(),
        'amount' => mt_rand(1, 10000) . "Euro",
        'accountant_id'=>$accountant->id
    ];
});
