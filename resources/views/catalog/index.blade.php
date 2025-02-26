@extends('layouts.app')

@section('content')

<!-- Toon alle producten in de Catalogus -->
<div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <h1 class="text-5xl font-extrabold text-yellow-500 mb-8 text-center tracking-wide drop-shadow-lg">
        📚 Catalogus van Magische Items
    </h1>
    <p class="text-lg text-gray-700 text-center mb-10">
        Bekijk alle items in de catalogus en ontdek hun eigenschappen! ✨
    </p>

    <!-- Zoek- en filterformulier -->
    <div class="mb-6 bg-gray-100 p-4 rounded-lg shadow">
        <form method="GET" action="{{ route('catalog.index') }}" class="grid grid-cols-1 sm:grid-cols-3 gap-4">

            <!-- Zoekveld -->
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Zoek op naam..."
                class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400">

            <!-- Filter: Type -->
            <select name="type" class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400">
                <option value="">Alle types</option>
                <option value="weapons" {{ request('type') == 'weapons' ? 'selected' : '' }}>Wapens</option>
                <option value="shields" {{ request('type') == 'shields' ? 'selected' : '' }}>Schilden</option>
                <option value="potions" {{ request('type') == 'potions' ? 'selected' : '' }}>Drankjes</option>
                <option value="armor" {{ request('type') == 'armor' ? 'selected' : '' }}>Pantser</option>
            </select>

            <!-- Filter: Zeldzaamheid -->
            <select name="rarity" class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400">
                <option value="">Alle zeldzaamheden</option>
                <option value="common" {{ request('rarity') == 'common' ? 'selected' : '' }}>Gewoon</option>
                <option value="uncommon" {{ request('rarity') == 'uncommon' ? 'selected' : '' }}>Ongewoon</option>
                <option value="rare" {{ request('rarity') == 'rare' ? 'selected' : '' }}>Zeldzaam</option>
                <option value="epic" {{ request('rarity') == 'epic' ? 'selected' : '' }}>Episch</option>
                <option value="legendary" {{ request('rarity') == 'legendary' ? 'selected' : '' }}>Legendarisch</option>
                <option value="mythic" {{ request('rarity') == 'mythic' ? 'selected' : '' }}>Mythisch</option>
            </select>

            <!-- Filterknop -->
            <button type="submit" class="col-span-1 sm:col-span-3 bg-yellow-500 text-white py-2 px-4 rounded-lg shadow hover:bg-yellow-400 transition">
                Filter & Zoek
            </button>
        </form>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @foreach($products as $product) <!-- Hier begin je de loop -->
        <div class="bg-white text-gray-900 rounded-xl shadow-md border border-gray-300 transform hover:scale-105 transition-all duration-300">
            <div class="relative">
                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-48 object-cover rounded-t-xl">
            </div>

            <div class="p-6">
                <h2 class="text-2xl font-bold mb-2">{{ $product->name }}</h2>
                <p class="text-gray-600 mb-4 line-clamp-3">{{ $product->description }}</p>

                <div class="grid grid-cols-2 gap-2 text-sm text-gray-700 mb-4">
                    <p><strong>🔹 Type:</strong> {{ $product->type ?? '-' }}</p>
                    <p><strong>💎 Zeldzaamheid:</strong> <span class="text-yellow-500">{{ $product->rarity ?? '-' }}</span></p>
                    <p><strong>⚡ Kracht:</strong> {{ $product->power ?? '-' }}</p>
                    <p><strong>🏃 Snelheid:</strong> {{ $product->speed ?? '-' }}</p>
                    <p><strong>🛡️ Duurzaamheid:</strong> {{ $product->durability ?? '-' }}</p>
                    <p><strong>✨ Speciale Eigenschap:</strong> {{ $product->special_property ?? '-' }}</p>
                </div>

                <div>
                    <a href="{{ route('catalog.show', $product) }}" class="bg-yellow-400 text-gray-900 px-4 py-2 rounded-lg shadow hover:bg-yellow-300 transition">
                        Bekijk>
                    </a>
                </div>
            </div>
        </div>
        @endforeach <!-- Hier sluit je de loop af -->
    </div>

    <!-- Paginering onderaan de pagina -->
    <div class="mt-8 flex justify-center">
        <div class="flex space-x-2">
            {{ $products->links('vendor.pagination.custom') }}
        </div>
    </div>
</div>

@endsection