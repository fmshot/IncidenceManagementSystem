<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Asset_group;
use Faker\Generator as Faker;

$factory->define(Asset_group::class, function (Faker $faker) {
    return [
        'code'=>$faker->randomDigit,
        'detail'=>$faker->word,
        'created_at'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'=>$faker->date($format = 'Y-m-d', $max = 'now')

    ];
});
