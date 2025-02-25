<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Toon de inventaris van de ingelogde gebruiker.
     */
    public function index()
    {
        $inventory = auth()->user()->inventory()->with('item')->get();
        return view('inventory.dashboard', compact('inventory'));
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