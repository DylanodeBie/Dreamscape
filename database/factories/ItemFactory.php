<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'type' => $this->faker->randomElement(['weapons', 'shields', 'potions', 'armor']),
            'rarity' => $this->faker->randomElement(['common', 'uncommon', 'rare', 'epic', 'legendary']),
            'power' => $this->faker->randomFloat(1, 0, 100),
            'speed' => $this->faker->randomFloat(1, 0, 50),
            'durability' => $this->faker->numberBetween(1, 500),
            'special_property' => $this->faker->sentence,
        ];
    }
}