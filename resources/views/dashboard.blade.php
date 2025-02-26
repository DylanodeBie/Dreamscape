@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl w-full space-y-8">
        <!-- Card for Dashboard -->
        <div class="bg-white shadow-2xl rounded-xl p-6">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-yellow-500 mb-6">Welkom op je Dashboard!</h1>
                <p class="text-lg text-gray-700 mb-8">We zijn blij je hier te hebben! Kies een van de onderstaande opties om verder te gaan:</p>
            </div>

            <!-- Grid layout voor de verschillende secties -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Inventaris link -->
                <div class="bg-blue-500 text-white rounded-xl shadow-lg p-6 hover:bg-blue-600 transition-all duration-300 text-center">
                    <a href="{{ route('inventory.index') }}" class="text-2xl font-bold">🛠️ Inventaris</a>
                    <p class="text-sm mt-2">Bekijk de items die je hebt verzameld!</p>
                </div>

                <!-- Catalogus link -->
                <div class="bg-green-500 text-white rounded-xl shadow-lg p-6 hover:bg-green-600 transition-all duration-300 text-center">
                    <a href="{{ route('catalog.index') }}" class="text-2xl font-bold">📚 Catalogus</a>
                    <p class="text-sm mt-2">Verken alle beschikbare magische items!</p>
                </div>

                <!-- Trades link -->
                <div class="bg-yellow-500 text-white rounded-xl shadow-lg p-6 hover:bg-yellow-600 transition-all duration-300 text-center">
                    <a href="{{ route('trades.index') }}" class="text-2xl font-bold">🤝 Handel</a>
                    <p class="text-sm mt-2">Ruil je items met andere gebruikers!</p>
                </div>

                <!-- Winkel link -->
                <div class="bg-red-500 text-white rounded-xl shadow-lg p-6 hover:bg-red-600 transition-all duration-300 text-center">
                    <a href="{{ route('shop.index') }}" class="text-2xl font-bold">🏪 Winkel</a>
                    <p class="text-sm mt-2">Koop nieuwe items voor je avontuur!</p>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection