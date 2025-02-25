@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
    <h1 class="text-4xl font-extrabold text-purple-400 mb-6 text-center tracking-wide">Inventaris Overzicht</h1>

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
</div>
@endsection