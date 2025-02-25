@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
    <div class="bg-gray-900 text-white shadow-lg rounded-lg border border-purple-500 p-6">
        <h2 class="text-3xl font-bold text-purple-300 text-center">{{ $inventoryItem->item->name ?? 'Onbekend Item' }}</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
            <div>
                <p class="text-purple-300">Beschrijving:</p>
                <p>{{ $inventoryItem->item->description ?? '-' }}</p>
            </div>
            <div>
                <p class="text-purple-300">Type:</p>
                <p>{{ $inventoryItem->item->type ?? '-' }}</p>
            </div>
            <div>
                <p class="text-purple-300">Zeldzaamheid:</p>
                <p>{{ $inventoryItem->item->rarity ?? '-' }}</p>
            </div>
            <div class="flex justify-between mt-4">
                <div class="text-center">
                    <span class="text-xl text-blue-400">⚡</span>
                    <p class="text-sm">{{ $inventoryItem->item->power ?? '-' }}</p>
                </div>
                <div class="text-center">
                    <span class="text-xl text-green-400">🏃</span>
                    <p class="text-sm">{{ $inventoryItem->item->speed ?? '-' }}</p>
                </div>
                <div class="text-center">
                    <span class="text-xl text-yellow-400">🛡️</span>
                    <p class="text-sm">{{ $inventoryItem->item->durability ?? '-' }}</p>
                </div>
            </div>
        </div>
        
        <div class="mt-6 text-center">
            <a href="{{ route('inventory.index') }}" class="bg-purple-500 text-white py-2 px-4 rounded-lg shadow hover:bg-purple-600 transition">
                Terug naar overzicht
            </a>
        </div>
    </div>
</div>
@endsection