<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;
use App\Models\Shop;
use App\Models\Inventory;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Haal alle item-ID's op die al in de inventory zitten
        $inventoryItemIds = Inventory::pluck('item_id')->toArray();

        // Haal alle items op die nog niet in de inventory zitten
        $availableItems = Item::whereNotIn('id', $inventoryItemIds)->get();

        // Voeg deze items toe aan de shop
        foreach ($availableItems as $item) {
            Shop::create([
                'item_id' => $item->id,
                'price' => fake()->randomFloat(2, 10, 500), // Willekeurige prijs tussen 10 en 500
            ]);
        }
    }
}