<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Inventory;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        // Haal alle item-ID's op die de gebruiker al in zijn inventory heeft
        $ownedItemIds = $user->inventory()->pluck('item_id')->toArray();

        // Haal alle items op die nog NIET in de inventory zitten
        $products = Item::whereNotIn('id', $ownedItemIds)->get();

        return view('shop.index', compact('products'));
    }

    public function addToInventory($itemId)
    {
        $user = auth()->user();

        // Zoek het item in de shop
        $shopItem = Item::find($itemId);

        if (!$shopItem) {
            return redirect()->back()->with('error', 'Dit item is niet te koop.');
        }

        // Controleer of de gebruiker genoeg geld heeft (verondersteld dat de gebruiker een 'balance' kolom heeft)
        if ($user->balance < $shopItem->price) {
            return redirect()->back()->with('error', 'Je hebt niet genoeg geld voor dit item.');
        }

        // Controleer of het item al in de inventaris zit
        if ($user->inventory()->where('item_id', $itemId)->exists()) {
            return redirect()->back()->with('error', 'Dit item zit al in je inventaris.');
        }

        // Trek geld af
        $user->save();

        // Voeg het item toe aan de inventory
        $user->inventory()->create([
            'item_id' => $itemId,
            'quantity' => 1,
        ]);

        return redirect()->back()->with('success', 'Item toegevoegd aan je inventaris!');
    }
}
