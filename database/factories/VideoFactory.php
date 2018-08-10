<?php

use Faker\Generator as Faker;

$factory->define(App\video::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->paragraph(6),
        'exercise' => $faker->paragraph(6),
    ];
});
