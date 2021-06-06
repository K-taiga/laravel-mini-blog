<?php

use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory(User::class,10)->create()->each(function ($user){

            factory(Blog::class, random_int(2,5))->create(['user_id' => $user]);
        });
    }
}
