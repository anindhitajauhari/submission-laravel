<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'articleTitle' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'articleBody' => collect($this->faker->paragraphs(mt_rand(5, 10)))
                    ->map(fn($p) => "<p>$p</p>")
                    ->implode(''),
            'user_id' => mt_rand(4,10),
            'category_id' => mt_rand(1,5)
];
    }
}
