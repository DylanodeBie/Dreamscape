<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TradeItem extends Model
{
    protected $table = 'trade_items';

    protected $fillable = [
        'trade_id',
        'item_id',
        'quantity',
    ];

    public function trade(): BelongsTo
    {
        return $this->belongsTo(Trade::class);
    }

    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class);
    }
}