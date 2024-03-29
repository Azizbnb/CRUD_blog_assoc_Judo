<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <x-logo/>   
        </x-slot>
        <x-slot name="bienvenue">
                <x-bienvenue class="w-20 h-20 fill-current" />
        </x-slot>
        <x-slot name="guestMode">
            <a href="/">
                <x-guestMode class="w-20 h-20 fill-current"/>
            </a>
        </x-slot>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf 

            <!-- Email Address--> 
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div> 

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Mot de passe')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Se souvenir de moi') }}</span>
                </label>
            </div> 

            <div class="flex items-center justify-end mt-4 flex-col">
                <a class="bg-red-200 p-2 rounded-lg text-sm text-gray-600 hover:text-black hover:bg-blue-200 hover:border-x-4 active:bg-blue-400" href="{{ route('register') }}">
                    {{ __('pas encore de compte? cliquez ici') }}
                </a>
                @if (Route::has('password.request'))
                    <a class="m-2 underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('mot de passe oublié?') }}
                    </a>
                @endif
                
                <x-button class="my-3 ml-3" style="background-color:#03045E;">
                    {{ __('Se connecter') }}
                </x-button>
            </div>
        </form>

        
 </x-auth-card>
</x-guest-layout>
