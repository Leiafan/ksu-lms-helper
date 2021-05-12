<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)->create()->each(function ($user) {
            $user->article()->save(factory(App\Article::class)->make());
        });

        factory(App\Heading::class, 10)->create();

        $headings = App\Heading::all();

        App\Article::all()->each(function ($article) use ($headings) {
            $article->headings()->attach(
                $headings->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
