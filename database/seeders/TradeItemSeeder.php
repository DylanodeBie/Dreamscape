<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TradeItem;

class TradeItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TradeItem::insert([
            [
                'trade_id' => 1, 
                'item_id' => 1, 
                'quantity' => 2
            ],
            [
                'trade_id' => 1, 
                'item_id' => 2, 
                'quantity' => 1
            ],
        ]);
    }
}