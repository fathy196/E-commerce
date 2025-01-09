<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __(!$recovery ? 'Please confirm access to your account by entering the authenticated code provided by authenticator app .': 'Please confirm access to your account by entering the recovry code provided by 2FA .') }}
    </div>

    <form method="POST" action="{{ route('two-factor.login') }}">
        @csrf

        @if (!$recovery)
            {{-- authentcation code --}}
            <div class="mt-4">
                <x-input-label for="code" :value="__('code')" />

                <x-text-input id="code" class="block mt-1 w-full" type="text" name="code" inputmode="numeric"
                    autofocus autocomplete="one-time-code" />

                <x-input-error :messages="$errors->get('code')" class="mt-2" />
            </div>
        @else
            {{-- recovery code --}}

            <div class="mt-4">
                <x-input-label for="recovery_code" :value="__('recovery code')" />

                <x-text-input id="recovery_code" class="block mt-1 w-full" type="text" name="recovery_code" autofocus
                    autocomplete="one-time-code" />

                <x-input-error :messages="$errors->get('recovery_code')" class="mt-2" />
            </div>
        @endif

        <div class="flex flex-center justify-end mt-4">

            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ $recovery ? route('two-factor.login') : route('two-factor.login', ['recovery' => true]) }}">
                {{ __(!$recovery ? 'Use Recovery Code' : 'Use Authentication Code') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('login') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

{{-- Recovery codes --}}

{{-- 42XTfGhdV2-yOAJsG7ft1

IzTVCvwB2S-ahkyizX0sf

tMDBIOhSdg-XKJkDNBV56

VVjeeGSAgW-NCVY0h6Ijl

uIW727WKb8-PIjrYxRZcj

itP5mz7LOy-VKrRia0Gsp

c3CuCQzVUk-XLd8L4s1Vk

9WJYqfPFBD-Zj7tQ0z71i --}}