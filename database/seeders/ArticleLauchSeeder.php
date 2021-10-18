<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Lauch;
use Illuminate\Database\Seeder;

class ArticleLauchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = Article::inRandomOrder()->limit(10)->get();
        $lauches = Lauch::inRandomOrder()->limit(10)->get();

        $articles->each(function (Article $article) use ($lauches) {
            $article->lauches()->sync($lauches->random());
        });
    }
}
