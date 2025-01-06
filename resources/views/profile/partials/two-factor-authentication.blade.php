<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Two Factor Authentcation') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Prevent hackers from accessing your account with an additional layer of security.') }}
        </p>
    </header>

    {{-- <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form> --}}

    <form method="post"
        action="{{ auth()->user()->two_factor_secret ? route('two-factor.disable') : route('two-factor.enable') }}"
        class="mt-6 space-y-6">
        @csrf

        {{-- @dump(auth()->user()) --}}

        <div class=" gap-4">
            @if (auth()->user()->two_factor_secret)
                @method('delete')

                <x-danger-button>{{ __('Disable') }}</x-danger-button>
            @else
                <x-primary-button>{{ __('Enable') }}</x-primary-button>
            @endif
        </div>
    </form>

    <div class=" gap-4 mt-4">

        @if (auth()->user()->two_factor_secret)
            {{-- QR code --}}
            <div class='mb-6'>
                {!! auth()->user()->twoFactorQrCodeSvg() !!}
            </div>
            {{-- Recovery codes --}}

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Recovery Codes:') }}
            </p>
            @foreach ((array) auth()->user()->recoverycodes() as $recoveryCode)
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    {{ $recoveryCode }}
                </p>
            @endforeach

            {{-- regenrating recovery codes --}}
            <form method="post" action="{{ url('user/two-factor-recovery-codes') }}">
                @csrf
                <x-primary-button>{{ __('ReGenerate Recovery Codes') }}</x-primary-button>

            </form>
            @endif

            @php
                $sessionStatus =
                    session('status') === 'two-factor-authentication-enabled'
                        ? 'Two factor authenticated enabled'
                        : (session('status') === 'two-factor-authentication-disabled'
                            ? 'Two factor authenticated disabled'
                            : '');
            @endphp
            {{-- @dump(session('status')) --}}
            @if ($sessionStatus)
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 4000)"
                    class="text-sm text-gray-600 dark:text-gray-400">{{ __($sessionStatus) }}</p>
            @endif

</section>

