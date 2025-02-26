<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();
        $ownedItemIds = $user->inventory()->pluck('item_id')->toArray();

        // Haal de zoek- en filterwaarden op
        $search = $request->input('search');
        $type = $request->input('type');
        $rarity = $request->input('rarity');

        // Query bouwen met filters
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

        // Paginate de resultaten
        $products = $query->paginate(6);

        return view('catalog.index', compact('products', 'search', 'type', 'rarity'));
    }

    public function show($itemId) // Voeg een parameter toe voor itemId
    {
        // Haal het item op door de ID
        $inventoryItem = Item::find($itemId); // Haal het specifieke item op

        if (!$inventoryItem) {
            return redirect()->route('catalog.index')->with('error', 'Item niet gevonden');
        }

        return view('catalog.show', compact('inventoryItem'));
    }
}
