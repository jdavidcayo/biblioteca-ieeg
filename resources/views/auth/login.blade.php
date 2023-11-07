<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="m-4 p-4">
            @csrf

            <div class="inputContainer">
                <span>
                    <img src="{{ asset('assets/img/Usuarui.png') }}" alt="Logo usuario" class="inputImg" />
                </span>
                
                <x-input id="email" class="px-4 py-2 rounded-r-lg w-full" type="email" name="email" :value="old('email')" placeholder="Usuario" required autofocus autocomplete="username" />
            </div>              

            <div class="mt-4 flex justify-center align-middle">
                <figure>
                    <img src="{{ asset('assets/img/Candado.png') }}" alt="Contraseña" width="25px">
                </figure>
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="Contraseña" />
            </div>

            <div class="flex flex-col items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
