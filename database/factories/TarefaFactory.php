<?php

use Faker\Generator as Faker;

$factory->define(App\Tarefa::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'complete'=> false
    ];
});
