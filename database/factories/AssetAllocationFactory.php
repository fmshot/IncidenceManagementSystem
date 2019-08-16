<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Asset_allocation;
use Faker\Generator as Faker;

$factory->define(Asset_allocation::class, function (Faker $faker) {
    return [
        // $table->bigIncrements('id')->unsigned();
            'trans_no'=>$faker->randomDigit,
            // $table->string('asset_code')->unsigned()->index();
            // $table->string('user_id')->unsigned();
            'asset_code'=>$faker->randomDigit,
            'date_assigned'=>$faker->date($format = 'Y-m-d', $max = 'now'),
          'asset_status'=>$faker->randomDigit,
            'date_transfer'=>$faker->date($format = 'Y-m-d', $max = 'now')
    ];
});
