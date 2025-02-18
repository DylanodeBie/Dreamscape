<?php

namespace Database\Seeders;

use App\Models\Inventory;
use App\Models\Item;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
        ]);

        User::factory()->count(10)->create();
        Item::factory()->count(50)->create();
        Inventory::factory()->count(50)->create();

        $this->call([
            TradeSeeder::class,
            TradeItemSeeder::class,
            NotificationSeeder::class,
        ]);
    }
}
