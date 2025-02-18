<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notification;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Notification::insert([
            [
                'sender_id' => 1,
                'receiver_id' => 2,
                'message' => 'Hey, wil je deze items ruilen?',
                'status' => 'unread',
            ],
            [
                'sender_id' => 2,
                'receiver_id' => 1,
                'message' => 'Ja, ik ben geïnteresseerd!',
                'status' => 'read',
            ],
        ]);
    }
}