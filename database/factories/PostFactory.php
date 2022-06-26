<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "user_id" => User::factory(),
            "category_id" => Category::factory(),
            "title" => $this->faker->sentence(),
            "slug" => $this->faker->unique()->slug(),
            "excerpt" => collect($this->faker->paragraphs(2))
                ->map(fn($item) => "<p>{$item}</p>")
                ->implode(""),
            "content" => collect($this->faker->paragraphs(8))
                ->map(fn($item) => "<p>{$item}</p>")
                ->implode(""),
            "image_url" => "https://picsum.photos/seed/{$this->faker->unique()->randomNumber()}/640/480",
            "published_at" => $this->faker->dateTimeBetween("-2 years", "now"),
        ];
    }
}
