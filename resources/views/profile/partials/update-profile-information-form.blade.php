<section class="profile-form">
    <header class="profile-form__header">
        <h2 class="profile-form__title">
            {{ __('Profile Information') }}
        </h2>

        <p class="profile-form__description">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="profile-form__form">
        @csrf
        @method('patch')

        <div class="profile-form__group">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="profile-form__input" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="profile-form__error" :messages="$errors->get('name')" />
        </div>

        <div class="profile-form__group">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="profile-form__input" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="profile-form__error" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="profile-form__text">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="profile-form__link">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="profile-form__status">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="profile-form__actions">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="profile-form__saved"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>