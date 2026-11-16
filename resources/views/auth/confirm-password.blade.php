<x-guest-layout>
    <div class="auth-form__text">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form class="auth-form" method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div class="auth-form__group">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="auth-form__input"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="auth-form__error" />
        </div>

        <div class="auth-form__actions">
            <x-primary-button class="auth-form__submit">
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>