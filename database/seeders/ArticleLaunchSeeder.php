<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Launch;
use Illuminate\Database\Seeder;

class ArticleLaunchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = Article::inRandomOrder()->limit(10)->get();
        $launches = Launch::inRandomOrder()->limit(10)->get();

        $articles->each(function (Article $article) use ($launches) {
            $article->launches()->sync($launches->random());
        });
    }
}
