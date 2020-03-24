<?php

use Faker\Generator as Faker;
use App\Recipe;

$factory->define(Recipe::class, function (Faker $faker) {
    return [
        'name' => 'Biername',
        'notes' => 'Ein paar Notizen',
        'origin' => 'www.brauundrauchshop.ch',
        'batch_size' => '50',
        'batch_size_unit' => 'l',
        'efficiency_percentage' => '58',
        'original_gravity' => '12',
        'original_gravity_unit' => 'p',
        'ibu' => '30',
        'color' => '20',
        'color_unit' => 'ebc',
        'alcohol_by_volume_percentage' => '5.6',
        'boil_time' => '70',
        'boil_time_unit' => 'min',
        'carbonation' => '4',
        'carbonation_unit' => 'g/l'
    ];
});
