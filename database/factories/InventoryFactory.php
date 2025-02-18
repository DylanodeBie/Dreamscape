<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Inventory;
use App\Models\User;
use App\Models\Item;

class InventoryFactory extends Factory
{
    protected $model = Inventory::class;

    public function definition(): array
    {
        return [
            'user_id' => 1, // Je stelt nu de user_id in op 11.
            'item_id' => Item::inRandomOrder()->first()->id ?? Item::factory(),
            'quantity' => $this->faker->numberBetween(1, 20),
        ];
    }
}
