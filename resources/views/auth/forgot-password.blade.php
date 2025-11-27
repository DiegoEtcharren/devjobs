<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('¿Olvidaste tu Password? Coloca tu email de registro y te enviaremos un enlace para reestablecer tu contraseña.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">

        </div>
        <div class="flex flex-col items-center justify-center my-3">
            <div class="flex justify-between gap-5 w-full">
                @if (Route::has('password.request'))
                    <x-link
                        :href="route('login')"
                    >
                        ¿Ya tienes una cuenta?
                    </x-link>
                    <x-link
                        :href="route('register')"
                    >
                        Crear Cuenta
                    </x-link>
                @endif
            </div>
            <x-primary-button class="w-full justify-center mt-4">
                {{ __('Enviar Email') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
