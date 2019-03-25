<?php

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Models\Shortlink::class, function (Faker $faker) {
    return [
        'source' => Str::random(5),
        'target' => $faker->url,
        'user_id' => User::inRandomOrder()->first()->id
    ];
});
