<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use App\Models\Blog;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'blog_id' => factory(Blog::class)->create(),
        'name' => $this->faker->name,
        'body' => $this->faker->realText(100),
        'created_at' => $this->faker->dateTimeBetween('-10days','0days'),
    ];
});
