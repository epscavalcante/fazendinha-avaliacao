<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "featured" => $this->faker->boolean,
            "title" => $this->faker->words(4, true),
            "url" => $this->faker->url,
            "imageUrl" => $this->faker->imageUrl,
            "newsSite" => $this->faker->url,
            "summary" => $this->faker->words(7, true),
            "publishedAt" => $this->faker->dateTime,
        ];
    }
}
