<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Blog;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'user_id'=>factory(User::class)->create(),
        // 'user_id' => function () {
        //     return User::factory()->create()->id;
        // },
        // randomElementで配列の中身をrandomで指定 true=1,false=0でよしなにやってくれる
        'is_open' => $this->faker->randomElement([true,true,true,true,false]),
        'title' => $this->faker->realText(20),
        'body' => $this->faker->realText(20),
        'updated_at' => $this->faker->dateTimeBetween('-10days','0days'),
    ];
});
