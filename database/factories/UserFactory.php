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

$factory->define(larastock\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(larastock\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'count' => $faker->randomDigit,
        'value' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 10),
        'description' => $faker->text,
    ];
});

$factory->define(larastock\Tag::class, function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});

$factory->define(larastock\EvaluateProduct::class, function (Faker $faker) {
    return [
        'note' => $faker->randomDigit,
        'comment' => $faker->text,
        'product_id' => Product::first()
    ];
});
