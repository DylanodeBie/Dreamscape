@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <h1 class="text-5xl font-extrabold text-yellow-500 mb-8 text-center tracking-wide drop-shadow-lg">
        🏪 Welkom in de Magische Shop!
    </h1>
    <p class="text-lg text-gray-700 text-center mb-10">
        Kies je items en voeg ze toe aan je inventaris! ✨
    </p>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-10" role="alert">
            <strong class="font-bold">Gelukt!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @forelse($products as $product)
        <div class="bg-white text-gray-900 rounded-xl shadow-lg border border-gray-200 transform hover:scale-105 transition-all duration-300">
            <div class="relative">
                <img src="{{ $product->image ?? 'https://via.placeholder.com/300' }}" 
                     alt="{{ $product->name }}" 
                     class="w-full h-48 object-cover rounded-t-xl">
                <span class="absolute top-2 right-2 bg-yellow-400 text-gray-800 px-3 py-1 rounded-full text-sm font-bold shadow">
                    ${{ $product->price }}
                </span>
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

                <form action="{{ route('shop.buy', $product->id) }}" method="POST" class="mt-4">
                    @csrf
                    <button type="submit" 
                            class="w-full bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition-all duration-300 transform hover:scale-105">
                        🛒 Toevoegen aan winkelmand
                    </button>
                </form>
            </div>
        </div>
        @empty
        <p class="text-center text-gray-400 col-span-full text-lg">🚫 Geen producten beschikbaar</p>
        @endforelse
    </div>
</div>
@endsection