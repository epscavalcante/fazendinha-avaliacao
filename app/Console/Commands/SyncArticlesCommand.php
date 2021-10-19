<?php

namespace App\Console\Commands;

use App\Models\Article;
use App\Models\Event;
use App\Models\Launch;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class SyncArticlesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:articles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Store articles on database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data = Http::get('https://api.spaceflightnewsapi.net/v3/articles')->json();

        foreach($data as $item) {

            $article = Article::create($item);

            foreach($item['events'] as $event) {
                $event = Event::firstOrCreate(['provider' => $event['provider']]);

                $article->events()->sync($event->id);
            }

            foreach($item['launches'] as $launch) {
                $launch = Launch::firstOrCreate(['provider' => $launch['provider']]);

                $article->launches()->sync($launch->id);
            }
        }

        return Command::SUCCESS;
    }
}
