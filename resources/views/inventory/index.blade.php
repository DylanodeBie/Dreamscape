@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
    <h1 class="text-4xl font-extrabold text-purple-400 mb-6 text-center tracking-wide">Inventaris Overzicht</h1>

    <!-- Zoek- en filterformulier -->
    <div class="mb-6 bg-gray-100 p-4 rounded-lg shadow">
        <form method="GET" action="{{ route('inventory.index') }}" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">

            <!-- Zoekveld -->
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Zoek op naam..."
                class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-400">

            <!-- Filter: Type -->
            <select name="type" class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-400">
                <option value="">Alle types</option>
                <option value="weapons" {{ request('type') == 'weapons' ? 'selected' : '' }}>Wapens</option>
                <option value="shields" {{ request('type') == 'shields' ? 'selected' : '' }}>Schilden</option>
                <option value="potions" {{ request('type') == 'potions' ? 'selected' : '' }}>Drankjes</option>
                <option value="armor" {{ request('type') == 'armor' ? 'selected' : '' }}>Pantser</option>
            </select>

            <!-- Filter: Zeldzaamheid -->
            <select name="rarity" class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-400">
                <option value="">Alle zeldzaamheden</option>
                <option value="common" {{ request('rarity') == 'common' ? 'selected' : '' }}>Gewoon</option>
                <option value="uncommon" {{ request('rarity') == 'uncommon' ? 'selected' : '' }}>Ongewoon</option>
                <option value="rare" {{ request('rarity') == 'rare' ? 'selected' : '' }}>Zeldzaam</option>
                <option value="epic" {{ request('rarity') == 'epic' ? 'selected' : '' }}>Episch</option>
                <option value="legendary" {{ request('rarity') == 'legendary' ? 'selected' : '' }}>Legendarisch</option>
                <option value="mythic" {{ request('rarity') == 'mythic' ? 'selected' : '' }}>Mythisch</option>
            </select>

            <!-- Filter: Kracht (Min) -->
            <input type="number" name="min_power" value="{{ request('min_power') }}" placeholder="Min. kracht"
                class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-400">

            <!-- Filter: Kracht (Max) -->
            <input type="number" name="max_power" value="{{ request('max_power') }}" placeholder="Max. kracht"
                class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-400">

            <!-- Filterknop -->
            <button type="submit" class="col-span-1 sm:col-span-3 bg-purple-500 text-white py-2 px-4 rounded-lg shadow hover:bg-purple-400 transition">
                Filter & Zoek
            </button>
        </form>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($inventory as $inv)
        <div class="bg-gradient-to-br from-purple-800 to-purple-600 text-white rounded-lg shadow-lg p-6 border border-purple-400 transform hover:scale-105 transition-all">
            <div class="flex items-center gap-4">
                <img src="{{ $inv->item->image_url ?? 'https://via.placeholder.com/50' }}" alt="{{ $inv->item->name }}" class="w-16 h-16 rounded-lg border border-purple-300">
                <div>
                    <h2 class="text-2xl font-bold">{{ $inv->item->name ?? 'Onbekend' }}</h2>
                    <p class="text-sm text-purple-200">{{ $inv->item->description ?? '-' }}</p>
                </div>
            </div>
            
            <div class="grid grid-cols-2 gap-4 mt-4">
                <p><strong>Type:</strong> {{ $inv->item->type ?? '-' }}</p>
                <p><strong>Zeldzaamheid:</strong> <span class="text-yellow-300">{{ $inv->item->rarity ?? '-' }}</span></p>
                <p><strong>⚡ Kracht:</strong> {{ $inv->item->power ?? '-' }}</p>
                <p><strong>🏃 Snelheid:</strong> {{ $inv->item->speed ?? '-' }}</p>
                <p><strong>🛡️ Duurzaamheid:</strong> {{ $inv->item->durability ?? '-' }}</p>
                <p><strong>✨ Speciale Eigenschap:</strong> {{ $inv->item->special_property ?? '-' }}</p>
            </div>

            <div class="mt-4 flex justify-between items-center">
                <span class="text-xl font-bold">📦 {{ $inv->quantity ?? 0 }}</span>
                <a href="{{ route('inventory.show', $inv) }}" class="bg-yellow-400 text-purple-900 px-4 py-2 rounded-lg shadow hover:bg-yellow-300">Bekijk</a>
            </div>
        </div>
        @empty
        <p class="text-center text-purple-300 col-span-full">Geen items gevonden</p>
        @endforelse
    </div>

    <!-- Paginering -->
    <div class="mt-8 flex justify-center">
        <div class="flex space-x-2">
            {{ $inventory->links('vendor.pagination.custom') }}
        </div>
    </div>
</div>
@endsection