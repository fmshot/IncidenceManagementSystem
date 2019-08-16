<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Audit_trail;
use Faker\Generator as Faker;

$factory->define(Audit_trail::class, function (Faker $faker) {
    return [
//        'user_id'=>$faker->randomDigit,
        'user_name'=>$faker->randomDigit,
        'table_name'=>$faker->randomDigit,
        'column_name'=>$faker->randomDigit,
        'old_value'=>$faker->randomDigit,
        'new_value'=>$faker->randomDigit,
        'date_and_time'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'row_operation'=>$faker->randomDigit,
        'column_operation'=>$faker->randomDigit,
        'serial_number'=>$faker->randomDigit,
        'table_keys'=>$faker->randomDigit,
        'key_values'=>$faker->randomDigit,
        'created_at'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'=>$faker->date($format = 'Y-m-d', $max = 'now'),

    ];
});
