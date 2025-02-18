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
            // Weapons
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
                'name' => 'Frostbite Axe',
                'description' => 'An axe that freezes anything it strikes.',
                'type' => 'weapons',
                'rarity' => 'legendary',
                'power' => 90.0,
                'speed' => 25.0,
                'durability' => 150,
                'special_property' => 'Freezes enemies on hit',
            ],
            [
                'name' => 'Poison Dagger',
                'description' => 'A small dagger coated with poison.',
                'type' => 'weapons',
                'rarity' => 'rare',
                'power' => 50.0,
                'speed' => 40.0,
                'durability' => 50,
                'special_property' => 'Poison damage over time',
            ],

            // Shields
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
                'name' => 'Golden Buckler',
                'description' => 'A small shield made of gold.',
                'type' => 'shields',
                'rarity' => 'uncommon',
                'power' => 5.0,
                'speed' => 10.0,
                'durability' => 120,
                'special_property' => 'Increases agility',
            ],
            [
                'name' => 'Dragon Scale Shield',
                'description' => 'A shield crafted from dragon scales.',
                'type' => 'shields',
                'rarity' => 'epic',
                'power' => 25.0,
                'speed' => 3.0,
                'durability' => 300,
                'special_property' => 'Absorbs 50% of magic damage',
            ],

            // Potions
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
                'name' => 'Mana Elixir',
                'description' => 'Restores mana points.',
                'type' => 'potions',
                'rarity' => 'uncommon',
                'power' => 0.0,
                'speed' => 0.0,
                'durability' => 1,
                'special_property' => 'Restores 30 MP',
            ],
            [
                'name' => 'Antidote',
                'description' => 'Cures all forms of poison.',
                'type' => 'potions',
                'rarity' => 'rare',
                'power' => 0.0,
                'speed' => 0.0,
                'durability' => 1,
                'special_property' => 'Cures poison status effect',
            ],

            // Armor
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
            [
                'name' => 'Steel Plate Mail',
                'description' => 'A durable set of steel armor.',
                'type' => 'armor',
                'rarity' => 'rare',
                'power' => 35.0,
                'speed' => 5.0,
                'durability' => 400,
                'special_property' => 'Increases physical defense',
            ],
            [
                'name' => 'Light Leather Armor',
                'description' => 'A lightweight armor for agile warriors.',
                'type' => 'armor',
                'rarity' => 'uncommon',
                'power' => 15.0,
                'speed' => 20.0,
                'durability' => 250,
                'special_property' => 'Increases agility and evasion',
            ],
        ]);
    }
}