<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = ['item_id', 'price'];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}