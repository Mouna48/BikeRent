<x-guest-layout>
    <form class="auth-form" method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="auth-form__group">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="auth-form__input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="auth-form__error" />
        </div>

        <!-- Email Address -->
        <div class="auth-form__group">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="auth-form__input" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="auth-form__error" />
        </div>

        <!-- Password -->
        <div class="auth-form__group">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="auth-form__input"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="auth-form__error" />
        </div>

        <!-- Confirm Password -->
        <div class="auth-form__group">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="auth-form__input"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="auth-form__error" />
        </div>

        <div class="auth-form__actions">
            <a class="auth-form__link" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="auth-form__submit">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>