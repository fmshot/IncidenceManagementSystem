<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Engineer;
use Faker\Generator as Faker;

$factory->define(Engineer::class, function (Faker $faker) {
    return [

        'contractor_id'=>$faker->randomDigit,
        'contractor_name'=>$faker->word,
        'contractor_type'=>$faker->word,
        'city'=>$faker->word,
        'state'=>$faker->word,
        'date_reg'=>$faker->word,
        'credit_limit'=>$faker->word,
        'payment_terms'=>$faker->date(),
        'open_balance'=>$faker->randomDigit,
        'account_balance'=>$faker->randomDigit,
        'credit_limit'=>$faker->randomDigit,
        'contact_person'=>$faker->word,
        'remarks'=>$faker->word,
        'last_bill_no'=>$faker->randomDigit,
        'last_bill_amt'=>$faker->randomDigit

    ];
});
