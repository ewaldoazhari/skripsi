<?php

use Faker\Generator as Faker;

$factory->define(App\Quiz::class, function (Faker $faker) {
    return [
        'jawaban1' => $faker->sentence,
        'jawaban2' => $faker->sentence,
        'jawaban3' => $faker->sentence,
        'jawaban_benar' => $faker->sentence,
        'pertanyaan' => $faker->paragraph(6),
    ];
});
