<?php

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Models\Shortlink::class, function (Faker $faker) {
    return [
        'hash' => Str::random(5),
        'original_url' => $faker->url,
        'user_id' => User::inRandomOrder()->first()->id
    ];
});
