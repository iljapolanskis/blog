<?php

namespace Database\Factories;

use App\Models\Rent\Location;
use Illuminate\Database\Eloquent\Factories\Factory;
use function MongoDB\BSON\toJSON;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Apartment>
 */
class ApartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => $this->faker->sentence(),
            "description" => collect($this->faker->paragraphs(8))
                ->map(fn($item) => "<p>$item</p>")
                ->implode(""),
            "city" => $this->faker->city(),
            "district" => $this->faker->word(),
            "street" => $this->faker->streetAddress(),
            "location" => "{$this->faker->latitude(35.91, 35.96)}, {$this->faker->longitude(14.31, 14.34)}",
            "rooms" => $this->faker->numberBetween(1, 10),
            "floor" => $this->faker->numberBetween(1, 5),
            "floors" => $this->faker->numberBetween(5, 12),
            "price" => $this->faker->randomFloat(2, 50, 1200),
            "area" => $this->faker->numberBetween(30, 200),
            "images" => "https://picsum.photos/seed/{$this->faker->unique()->randomNumber()}/640/480, https://picsum.photos/seed/{$this->faker->unique()->randomNumber()}/640/480, https://picsum.photos/seed/{$this->faker->unique()->randomNumber()}/640/480",
        ];
    }
}
