<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Video;
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

$factory->define(Video::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->text, 
        'thumbnail' => $faker->imageUrl($width = 640, $height = 480), 
        'videoUrl' => $faker->url,
    ];
});
