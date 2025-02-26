<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Inventory;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();

        // Haal de zoek- en filterwaarden op
        $search = $request->input('search');
        $type = $request->input('type');
        $rarity = $request->input('rarity');

        // Query opbouwen met filters
        $query = Item::query();

        if ($search) {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%');
        }

        if ($type) {
            $query->where('type', $type);
        }

        if ($rarity) {
            $query->where('rarity', $rarity);
        }

        // Pagineren (6 items per pagina)
        $products = $query->paginate(6);

        return view('shop.index', compact('products', 'search', 'type', 'rarity'));
    }

    public function addToInventory($itemId)
    {
        $user = auth()->user();

        // Zoek het item in de shop
        $shopItem = Item::find($itemId);

        if (!$shopItem) {
            return redirect()->back()->with('error', 'Dit item is niet te koop.');
        }

        // Controleer of de gebruiker genoeg geld heeft
        if ($user->balance < $shopItem->price) {
            return redirect()->back()->with('error', 'Je hebt niet genoeg geld voor dit item.');
        }

        $user->save();

        // Controleer of het item al in de inventaris zit
        $inventoryItem = $user->inventory()->where('item_id', $itemId)->first();

        if ($inventoryItem) {
            // Als het item al in de inventaris zit, verhoog de hoeveelheid
            $inventoryItem->quantity += 1;
            $inventoryItem->save();
        } else {
            // Anders voeg een nieuw item toe aan de inventaris
            $user->inventory()->create([
                'item_id' => $itemId,
                'quantity' => 1,
            ]);
        }

        return redirect()->back()->with('success', 'Item toegevoegd aan je inventaris!');
    }
}
