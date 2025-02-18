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
            // Trade 1
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
            [
                'trade_id' => 1, 
                'item_id' => 3, 
                'quantity' => 5
            ],
            [
                'trade_id' => 1, 
                'item_id' => 4, 
                'quantity' => 3
            ],

            // Trade 2
            [
                'trade_id' => 2, 
                'item_id' => 2, 
                'quantity' => 1
            ],
            [
                'trade_id' => 2, 
                'item_id' => 5, 
                'quantity' => 4
            ],
            [
                'trade_id' => 2, 
                'item_id' => 6, 
                'quantity' => 2
            ],

            // Trade 3
            [
                'trade_id' => 3, 
                'item_id' => 7, 
                'quantity' => 10
            ],
            [
                'trade_id' => 3, 
                'item_id' => 8, 
                'quantity' => 8
            ],
            [
                'trade_id' => 3, 
                'item_id' => 1, 
                'quantity' => 5
            ],

            // Trade 4
            [
                'trade_id' => 4, 
                'item_id' => 9, 
                'quantity' => 3
            ],
            [
                'trade_id' => 4, 
                'item_id' => 4, 
                'quantity' => 1
            ],
            [
                'trade_id' => 4, 
                'item_id' => 2, 
                'quantity' => 7
            ],

            // Trade 5
            [
                'trade_id' => 5, 
                'item_id' => 10, 
                'quantity' => 6
            ],
            [
                'trade_id' => 5, 
                'item_id' => 3, 
                'quantity' => 4
            ],
            [
                'trade_id' => 5, 
                'item_id' => 7, 
                'quantity' => 2
            ],
            [
                'trade_id' => 5, 
                'item_id' => 5, 
                'quantity' => 3
            ],

            // Trade 6
            [
                'trade_id' => 6, 
                'item_id' => 8, 
                'quantity' => 5
            ],
            [
                'trade_id' => 6, 
                'item_id' => 2, 
                'quantity' => 6
            ],
            [
                'trade_id' => 6, 
                'item_id' => 6, 
                'quantity' => 4
            ],
            [
                'trade_id' => 6, 
                'item_id' => 9, 
                'quantity' => 2
            ],
            
            // Trade 7
            [
                'trade_id' => 7, 
                'item_id' => 1, 
                'quantity' => 3
            ],
            [
                'trade_id' => 7, 
                'item_id' => 5, 
                'quantity' => 4
            ],
            [
                'trade_id' => 7, 
                'item_id' => 10, 
                'quantity' => 2
            ],

            // Trade 8
            [
                'trade_id' => 8, 
                'item_id' => 4, 
                'quantity' => 5
            ],
            [
                'trade_id' => 8, 
                'item_id' => 3, 
                'quantity' => 8
            ],
            [
                'trade_id' => 8, 
                'item_id' => 7, 
                'quantity' => 6
            ],
        ]);
    }
}