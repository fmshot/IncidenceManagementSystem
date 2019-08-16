<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Asset_detail;
use Faker\Generator as Faker;

$factory->define(Asset_detail::class, function (Faker $faker) {
    return [
        'asset_code'=>$faker->randomDigit,
        'asset_group'=>$faker->randomDigit,
        'asset_desc'=>$faker->randomDigit,
        'refnum'=>$faker->randomDigit,
        'asset_type'=>$faker->randomDigit,
        'date_acquired'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'original_cost'=>$faker->randomDigit,
        'total_maint_amt'=>$faker->randomDigit,
        'last_service_date'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'next_service_date'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'last_bill_amount'=>$faker->randomDigit,
        'equip_status'=>$faker->randomDigit,
        'date_sold'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'created_at'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'updated_at'=>$faker->date($format = 'Y-m-d', $max = 'now')

    ];
});
