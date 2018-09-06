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

//User
$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'username' => $faker->name,
        'fullname' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'access_token' => str_random(100),
        'is_active' => rand(0,1),
        'role' => rand(0,1),
        'remember_token' => str_random(10),
    ];
});

//Film
$factory->define(App\Models\Film::class, function (Faker $faker) {
    $gerne = ['action', 'romantice', 'cartoon', 'supernatural', 'fiction'];
    $kind = ['2D', '3D', '4D', 'IMAX'];
    
    return [
        'name' => $faker->name,
        'year' => $faker->numberBetween($min = 2012, $max = 2019),
        'price' => $faker->randomNumber(2),
        'author' => $faker->name,
        'actor' => $faker->name . ', ' . $faker->name,
        'genre' => $gerne[array_rand($gerne)] . ', '. $gerne[array_rand($gerne)],
        'time_limit' => $faker->numberBetween($min = 120, $max = 180),
        'kind' => $kind[array_rand($kind)] . ', '. $kind[array_rand($kind)],
        'avg_rating' => rand (1,5),
        'total_rating' => rand (1,100),
        'is_active' => rand (0,1),
    ];
});

//City
$factory->define(App\Models\City::class, function (Faker $faker) {
    return [
        'name' => $faker->city,
    ];
});

//Cinema
$factory->define(App\Models\Cinema::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});

//Room
$factory->define(App\Models\Room::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});

//Seat
$factory->define(App\Models\Seat::class, function (Faker $faker) {
    return [];
});

//Schedule
$factory->define(App\Models\Schedule::class, function (Faker $faker) {
    
    return [
        'date' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});

//Borrowing
$factory->define(App\Models\Borrowing::class, function (Faker $faker) {
    return [
        'total_price' => rand(90000, 270000),
        'status' => rand (1, 3),
        
    ];
});

//Detail Booking Films
$factory->define(App\Models\DetailBorrowing::class, function (Faker $faker) {
    return [
        'price' => rand(30000, 65000),
        'is_finish' => rand (0, 1),
        
    ];
});

//Comment
$factory->define(App\Models\Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->text,
        
    ];
});

//Favorite
$factory->define(App\Models\Favorite::class, function (Faker $faker) {
    return [];
});
