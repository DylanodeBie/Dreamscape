<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();

        // Haal zoek- en filterwaarden op
        $search = $request->input('search');
        $type = $request->input('type');
        $rarity = $request->input('rarity');
        $minPower = $request->input('min_power');
        $maxPower = $request->input('max_power');

        // Query opbouwen met filters
        $query = Inventory::where('user_id', $user->id)->with('item');

        if ($search) {
            $query->whereHas('item', function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%');
            });
        }

        if ($type) {
            $query->whereHas('item', function ($q) use ($type) {
                $q->where('type', $type);
            });
        }

        if ($rarity) {
            $query->whereHas('item', function ($q) use ($rarity) {
                $q->where('rarity', $rarity);
            });
        }

        if ($minPower) {
            $query->whereHas('item', function ($q) use ($minPower) {
                $q->where('power', '>=', $minPower);
            });
        }

        if ($maxPower) {
            $query->whereHas('item', function ($q) use ($maxPower) {
                $q->where('power', '<=', $maxPower);
            });
        }

        // Pagineren (6 items per pagina)
        $inventory = $query->paginate(6);

        return view('inventory.index', compact('inventory', 'search', 'type', 'rarity', 'minPower', 'maxPower'));
    }

    /**
     * Toon een specifiek inventarisitem.
     */
    public function show($id)
    {
        $inventoryItem = Inventory::where('user_id', auth()->id())->with('item')->findOrFail($id);
        return view('inventory.show', compact('inventoryItem'));
    }
}
