<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\WOTNew;
use Faker\Generator as Faker;
use App\Models\User;

$factory->define(WOTNew::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'content' => file_get_contents('http://loripsum.net/api'),
        'creator_id' => function(){
            return User::where('role_id', 3)->get()->random()->id;
        },
        'main_picture' => $faker->imageUrl($width = 640, $height = 480),
    ];
});
