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
        Inventory::insert([
            [
                'user_id' => 1,
                'item_id' => 1,
                'quantity' => 5,
            ],
            [
                'user_id' => 1,
                'item_id' => 2,
                'quantity' => 2,
            ],
            [
                'user_id' => 2,
                'item_id' => 3,
                'quantity' => 1,
            ],
        ]);
    }
}