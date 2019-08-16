<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Branch;
use Faker\Generator as Faker;

$factory->define(Branch::class, function (Faker $faker) {
    return [
        'code'=>$faker->randomDigit,
        'name'=>$faker->word,
        'state_id'=>$faker->randomDigit,
        'address'=>$faker->word,
        'old_value'=>$faker->randomDigit,
        'created_at'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'=>$faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
