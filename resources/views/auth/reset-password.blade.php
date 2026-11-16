<x-guest-layout>
    <form class="auth-form" method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="auth-form__group">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="auth-form__input" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="auth-form__error" />
        </div>

        <!-- Password -->
        <div class="auth-form__group">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="auth-form__input" type="password" name="password" required autocomplete="new-password" />
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
            <x-primary-button class="auth-form__submit">
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>