<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->enum('type', ['weapons', 'shields', 'potions', 'armor']);
            $table->enum('rarity', ['common', 'uncommon', 'rare', 'epic', 'legendary', 'mythic']);
            $table->double('power');
            $table->double('speed');
            $table->integer('durability');
            $table->string('special_property')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
