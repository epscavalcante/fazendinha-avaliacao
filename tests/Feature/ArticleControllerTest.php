<?php

namespace Tests\Feature;

use App\Models\Article;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticleControllerTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_if_listing_articles_empty()
    {
        $response = $this->json('GET', route('articles.index'));

        $response->assertStatus(200)->assertJsonCount(0, 'data');
    }

    public function test_if_listing_articles_with_any_data()
    {
        Article::factory()->create();

        $response = $this->json('GET', route('articles.index'));

        $response->assertStatus(200)->assertJsonCount(1, 'data');
    }

    public function test_if_article_validation_fails_on_creation_fails()
    {
        $response = $this->json('POST', route('articles.store'), []);

        $response->assertUnprocessable();
    }

    public function test_if_article_validation_on_creation_passes()
    {
        $response = $this->json('POST', route('articles.store'), Article::factory()->make()->toArray());

        $response->assertCreated();
    }

    public function test_if_receives_not_found_when_searching_article()
    {
        $response = $this->json('GET', route('articles.show', 1));

        $response->assertNotFound();
    }

    public function test_if_receives_success_when_searching_article()
    {
        $article = Article::factory()->create();

        $response = $this->json('GET', route('articles.show', $article));

        $response->assertSuccessful();
    }

    public function test_if_receives_success_when_update_article()
    {
        $article = Article::factory()->create();

        $data = ['title' => 'Updated'];

        $response = $this->json('PUT', route('articles.update', $article), $data);

        $response->assertSuccessful();
    }

    public function test_if_receives_no_content_when_delete_article()
    {
        $article = Article::factory()->create();

        $response = $this->json('DELETE', route('articles.destroy', $article));

        $response->assertNoContent();
    }
}
