<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->email,
        'phone' => $faker->phoneNumber,
        'password' => '$2y$10$T./64AbW6IScGweTMor5O.hqezs8VVXEO0yh9lGxtk3mx/p0U9q3a', // deeply
        'remember_token' => str_random(10),
    ];
});
