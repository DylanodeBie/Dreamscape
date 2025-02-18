<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Inventory;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Maak 50 inventory items aan
        \App\Models\Inventory::factory()->count(50)->create([
            'user_id' => 1, // Zorg ervoor dat alle items naar user_id 11 gaan
        ]);
    }
}