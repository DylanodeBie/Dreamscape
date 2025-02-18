<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trade;

class TradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trade::create([
            'sender_id' => 1, 
            'receiver_id' => 2, 
            'status' => 'pending',
            'trade_accepted' => null,
        ]);
    }
}