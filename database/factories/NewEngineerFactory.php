<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model\Engineer::class, function (Faker $faker) {

    return [
        'contractor_id'=>$faker->word,
        'contractor_name'=>$faker->word,
        'contractor_type'=>$faker->word,
        'contact_address'>$faker->word,
        'city'=>$faker->word,
        'state'=>$faker->word,
        'date_reg'=>\Carbon\Carbon::now()->toDateTimeString(),
        'phone'=>$faker->word,
        'credit_limit'=>$faker->randomDigit,
        'last_invoice_date'=>\Carbon\Carbon::now()->toDateTimeString(),
        'last_payment_date'=>\Carbon\Carbon::now()->addDays(5)->toDateTimeString(),
        'payment_terms'=>$faker->word,
        'open_balance'=>$faker->randomDigit,
        'account_balance'=>$faker->randomDigit,
        'contact_person'=>$faker->word,
        'remarks'=>$faker->word,
        'last_bill_no'=>$faker->word,
        'last_bill_amt'=>$faker->randomDigit
    ];
   });
