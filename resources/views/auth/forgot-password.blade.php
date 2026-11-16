<x-guest-layout>
    <div class="auth-form__text">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="auth-form__status" :status="session('status')" />

    <form class="auth-form" method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="auth-form__group">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="auth-form__input" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="auth-form__error" />
        </div>

        <div class="auth-form__actions">
            <x-primary-button class="auth-form__submit">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>