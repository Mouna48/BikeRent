<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="auth-form__status" :status="session('status')" />

    <form class="auth-form" method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="auth-form__group">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="auth-form__input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="auth-form__error" />
        </div>

        <!-- Password -->
        <div class="auth-form__group">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="auth-form__input"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="auth-form__error" />
        </div>

        <!-- Remember Me -->
        <div class="auth-form__group">
            <label for="remember_me" class="auth-form__remember">
                <input id="remember_me" type="checkbox" class="auth-form__checkbox" name="remember">
                <span class="auth-form__remember-text">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="auth-form__actions">
            @if (Route::has('password.request'))
                <a class="auth-form__link" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="auth-form__submit">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>