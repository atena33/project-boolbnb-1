<?php

/** @var Factory $factory */

use App\Partnership;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Partnership::class, function (Faker $faker) {
    return [
        'start_date' => $faker->dateTime(),
        'end_date' => $faker->dateTimeInInterval($startDate = 'now', $interval = '+ 144 hours', $timezone = null),
        'is_active' => $faker->boolean(),
        'transaction_id' => $faker->bothify('#???????')
    ];
});
