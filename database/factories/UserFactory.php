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
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
<<<<<<< HEAD
=======
        'username' => $faker->word,
        'dob' => Carbon\Carbon::('Aug 6 1993'),
>>>>>>> 5a0f013d30806c41d9024a4f9c6713f6aea3eff6
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
<<<<<<< HEAD
=======


$factory->define(App\Post::class, function (Faker\Generator $faker) {

    return [
        'user_od' => App\User:all()->random()-id,
        'content' => $faker->paragraph(5)-,
        'live' => $faker->boolean(),
        'post_on' => Carbon\Carbon::parse('+1 week'),
    ];
});
>>>>>>> 5a0f013d30806c41d9024a4f9c6713f6aea3eff6
