<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
        @csrf

        <div class="mb-4">
            <x-input-label for="name" :value="__('Naam')" />
            <x-text-input id="name" class="block w-full mt-1 border border-gray-300 p-2 rounded-lg" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-600" />
        </div>

        <div class="mb-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1 border border-gray-300 p-2 rounded-lg" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
        </div>

        <div class="mb-4">
            <x-input-label for="password" :value="__('Wachtwoord')" />
            <x-text-input id="password" class="block w-full mt-1 border border-gray-300 p-2 rounded-lg" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
        </div>

        <div class="mb-4">
            <x-input-label for="password_confirmation" :value="__('Bevestig Wachtwoord')" />
            <x-text-input id="password_confirmation" class="block w-full mt-1 border border-gray-300 p-2 rounded-lg" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-600" />
        </div>

        <div class="flex flex-col items-center space-y-2 mb-4">
            <a class="text-sm text-indigo-600 hover:text-indigo-500" href="{{ route('login') }}">
                {{ __('Al geregistreerd? Log in!') }}
            </a>
        </div>

        <div class="flex justify-center">
            <x-primary-button class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg border border-indigo-500 shadow-md transform hover:scale-105 transition">
                {{ __('Registreer') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>