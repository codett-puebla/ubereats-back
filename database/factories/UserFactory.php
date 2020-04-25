<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
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

//$factory->define(User::class, function (Faker $faker) {
//    return [
//        'name' => $faker->name,
//        'email' => $faker->unique()->safeEmail,
//        'email_verified_at' => now(),
//        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//        'remember_token' => Str::random(10),
//    ];
//});

$factory->define(\App\restaurant::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'rank' => $faker->randomFloat(1,1, 5),
        'delivery_cost' => $faker->randomFloat(1,1, 5),
        'wait_time' => $faker->time(), // password
        'food_kind' => $faker->colorName,
        'lat' => $faker->latitude,
        'long' => $faker->longitude
    ];
});

$factory->define(\App\dish::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->city,
        'price' => $faker->randomFloat(4,1,5),
        'brand' => $faker->name,
        'type' => $type = $faker->randomElement([\App\dish::FOOD, \App\dish::DRINK]),
        'preparation_time' => $faker->time()
    ];
});
