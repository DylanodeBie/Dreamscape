<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trade;
use Carbon\Carbon;

class TradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trade::insert([
            // Trade 1
            [
                'sender_id' => 1, 
                'receiver_id' => 2, 
                'status' => 'pending',
                'trade_accepted' => null,  // Geen datum
            ],
            // Trade 2
            [
                'sender_id' => 1, 
                'receiver_id' => 3, 
                'status' => 'completed',
                'trade_accepted' => Carbon::now(),  // Gebruik de huidige datum
            ],
            // Trade 3
            [
                'sender_id' => 2, 
                'receiver_id' => 4, 
                'status' => 'rejected',
                'trade_accepted' => null,  // Geen datum
            ],
            // Trade 4
            [
                'sender_id' => 3, 
                'receiver_id' => 2, 
                'status' => 'pending',
                'trade_accepted' => null,  // Geen datum
            ],
            // Trade 5
            [
                'sender_id' => 4, 
                'receiver_id' => 1, 
                'status' => 'completed',
                'trade_accepted' => Carbon::now(),  // Gebruik de huidige datum
            ],
            // Trade 6
            [
                'sender_id' => 1, 
                'receiver_id' => 5, 
                'status' => 'pending',
                'trade_accepted' => null,  // Geen datum
            ],
            // Trade 7
            [
                'sender_id' => 2, 
                'receiver_id' => 3, 
                'status' => 'completed',
                'trade_accepted' => Carbon::now(),  // Gebruik de huidige datum
            ],
            // Trade 8
            [
                'sender_id' => 3, 
                'receiver_id' => 1, 
                'status' => 'pending',
                'trade_accepted' => null,  // Geen datum
            ],
            // Trade 9
            [
                'sender_id' => 5, 
                'receiver_id' => 4, 
                'status' => 'rejected',
                'trade_accepted' => null,  // Geen datum
            ],
            // Trade 10
            [
                'sender_id' => 4, 
                'receiver_id' => 5, 
                'status' => 'completed',
                'trade_accepted' => Carbon::now(),  // Gebruik de huidige datum
            ],
            // Trade 11
            [
                'sender_id' => 2, 
                'receiver_id' => 1, 
                'status' => 'completed',
                'trade_accepted' => Carbon::now(),  // Gebruik de huidige datum
            ],
            // Trade 12
            [
                'sender_id' => 5, 
                'receiver_id' => 2, 
                'status' => 'pending',
                'trade_accepted' => null,  // Geen datum
            ],
        ]);
    }
}