<?php

use Faker\Generator as Faker;
use App\Contact;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone' => $faker->phoneNumber,
        'adress' => $faker->address,
        'email' => $faker->unique()->email,
        'birthday' => $faker->dateTimeThisCentury->format('Y-m-d'),
        'user_id' => function(){
            return factory(App\User::class)->create()->id;
          },
    ];
});
