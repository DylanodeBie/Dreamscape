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
        // Kies een itemtype
        $type = $this->faker->randomElement(['weapons', 'shields', 'potions', 'armor']); // Gebruik de juiste enum waarde
        
        // Stel de standaardwaarden op basis van het type in
        $name = $this->faker->word;
        $description = $this->faker->sentence;
        $special_property = $this->faker->sentence;
        $power = 0;
        $speed = 0;
        $durability = 0;

        // Specifieke eigenschappen per itemtype
        switch ($type) {
            case 'weapons':
                $name = $this->faker->randomElement(['Sword', 'Axe', 'Dagger', 'Bow', 'Crossbow']);
                $power = $this->faker->randomFloat(2, 5, 100);
                $speed = $this->faker->randomFloat(2, 10, 30);
                $durability = $this->faker->numberBetween(50, 300);
                // Speciale eigenschappen voor wapens
                $special_property = $this->faker->randomElement([
                    'Is een vlammen zwaard',
                    'Heeft magische krachten',
                    'Verhoogt je aanvalskracht',
                    'Heeft vergiftigde sneden',
                    'Versterkt bij volle maan'
                ]);
                break;
            case 'shields':
                $name = $this->faker->randomElement(['Wooden Shield', 'Steel Shield', 'Dragon Scale Shield']);
                $power = $this->faker->randomFloat(2, 0, 50);
                $durability = $this->faker->numberBetween(150, 500);
                // Speciale eigenschappen voor schilden
                $special_property = $this->faker->randomElement([
                    'Verhoogt je verdediging tegen vuur',
                    'Heeft een magisch afweerschild',
                    'Krachtig tegen fysieke aanvallen',
                    'Is ondoordringbaar tegen projectielen',
                    'Is onverwoestbaar voor een korte tijd'
                ]);
                break;
            case 'potions':
                $name = $this->faker->randomElement(['Health Potion', 'Mana Potion', 'Strength Potion']);
                $power = 0;
                $speed = $this->faker->randomFloat(2, 5, 20);
                // Speciale eigenschappen voor potions
                $special_property = $this->faker->randomElement([
                    'Heeft een lange uitwerking',
                    'Gaat over op meerdere personen',
                    'Heeft onmiddellijke effecten',
                    'Verhoogt je kracht voor 1 uur',
                    'Herstelt volledige gezondheid'
                ]);
                break;
            case 'armor':
                $name = $this->faker->randomElement(['Leather Armor', 'Iron Plate', 'Dragon Scale Armor']);
                $power = 0;
                $durability = $this->faker->numberBetween(100, 500);
                // Speciale eigenschappen voor armor
                $special_property = $this->faker->randomElement([
                    'Verhoogt je snelheid',
                    'Biedt bescherming tegen magische aanvallen',
                    'Versterkt je uithoudingsvermogen',
                    'Zorgt voor onzichtbaarheid bij nacht',
                    'Heeft een ademend effect'
                ]);
                break;
        }

        return [
            'name' => $name,
            'description' => $description,
            'type' => $type,
            'rarity' => $this->faker->randomElement(['common', 'uncommon', 'rare', 'epic', 'legendary', 'mythic']),
            'power' => $power,
            'speed' => $speed,
            'durability' => $durability,
            'special_property' => $special_property,
        ];
    }
}