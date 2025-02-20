<x-guest-layout class="bg-white text-gray-900 min-h-screen flex items-center justify-center">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4 text-center text-green-600" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="bg-white p-8 rounded-lg shadow-lg w-96 border border-gray-300">
        @csrf

        <!-- Email Address -->
        <!-- Gebruikersnaam of E-mail -->
        <div class="mb-4">
            <x-input-label for="login" class="text-gray-700" :value="__('Gebruikersnaam of E-mail')" />
            <x-text-input id="login" class="block w-full bg-white border border-gray-300 text-gray-900 p-2 rounded-lg mt-1" type="text" name="login" :value="old('login')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('login')" class="mt-2 text-red-600" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-input-label for="password" class="text-gray-700" :value="__('Wachtwoord')" />
            <x-text-input id="password" class="block w-full bg-white border border-gray-300 text-gray-900 p-2 rounded-lg mt-1" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center mb-4">
            <input id="remember_me" type="checkbox" class="rounded border-gray-400 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
            <label for="remember_me" class="ml-2 text-sm text-gray-700">{{ __('Onthoud mij') }}</label>
        </div>

        <div class="flex flex-col items-center justify-center space-y-2">
            @if (Route::has('password.request'))
            <a class="text-sm text-indigo-600 hover:text-indigo-500" href="{{ route('password.request') }}">
                {{ __('Wachtwoord vergeten?') }}
            </a>
            @endif

            <a class="text-sm text-indigo-600 hover:text-indigo-500" href="{{ route('register') }}">
                {{ __('Nog geen account? Registreer!') }}
            </a>
        </div>

        <div class="flex justify-center mt-6">
            <x-primary-button class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg border border-indigo-500 shadow-md transform hover:scale-105 transition">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>