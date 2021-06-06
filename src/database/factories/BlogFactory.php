<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'title' => $this->faker->realText(20),
        'body' => $this->faker->realText(20),
        'updated_at' => $this->faker->dateTimeBetween('-10days','0days'),
    ];
});
