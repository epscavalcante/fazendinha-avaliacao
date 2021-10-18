<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Event;
use Illuminate\Database\Seeder;

class ArticleEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = Article::inRandomOrder()->limit(10)->get();
        $events = Event::inRandomOrder()->limit(10)->get();

        $articles->each(function (Article $article) use ($events) {
            $article->events()->sync($events->random());
        });
    }
}
