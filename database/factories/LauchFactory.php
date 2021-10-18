<?php

namespace Database\Factories;

use App\Models\Lauch;
use Illuminate\Database\Eloquent\Factories\Factory;

class LauchFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lauch::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->uuid,
            'provider' => $this->faker->words(4, true)
        ];
    }
}
