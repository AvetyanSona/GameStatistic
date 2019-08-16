<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\WOTNew;
use Faker\Generator as Faker;

$factory->define(WOTNew::class, function (Faker $faker) {
    return [
        'title' => $faker->randomHtml(1,2),
        'content' => $faker->randomHtml(3,4),
        'creator_id' => function(){
            return factory (App\Models\User::class)->where('role_id',3)->get()->random()->id;
        },
        'main_picture' => $faker->imageUrl($width = 640, $height = 480),
    ];
});
