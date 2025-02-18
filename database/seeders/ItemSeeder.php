<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::insert([
            [
                'name' => 'Flaming Sword',
                'description' => 'A sword engulfed in flames.',
                'type' => 'weapons',
                'rarity' => 'epic',
                'power' => 75.5,
                'speed' => 30.0,
                'durability' => 100,
                'special_property' => 'Burns enemies on hit',
            ],
            [
                'name' => 'Steel Shield',
                'description' => 'A strong shield made of steel.',
                'type' => 'shields',
                'rarity' => 'rare',
                'power' => 10.0,
                'speed' => 5.0,
                'durability' => 200,
                'special_property' => 'Blocks fire damage',
            ],
            [
                'name' => 'Healing Potion',
                'description' => 'A potion that restores health.',
                'type' => 'potions',
                'rarity' => 'common',
                'power' => 0.0,
                'speed' => 0.0,
                'durability' => 1,
                'special_property' => 'Restores 50 HP',
            ],
            [
                'name' => 'Dragon Armor',
                'description' => 'Armor made from dragon scales.',
                'type' => 'armor',
                'rarity' => 'legendary',
                'power' => 50.0,
                'speed' => 10.0,
                'durability' => 500,
                'special_property' => 'Reduces fire damage by 80%',
            ],
        ]);
    }
}