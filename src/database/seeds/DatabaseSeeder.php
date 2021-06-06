<?php

use App\Models\Blog;
use App\Models\User;
use App\Models\Comment;
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
            factory(Blog::class, random_int(2,5))->create(['user_id' => $user])->each(function($blog) {
                factory(Comment::class,random_int(1,3))->create(['blog_id'=> $blog]);
            });
        });
    }
}
