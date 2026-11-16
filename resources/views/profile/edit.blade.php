<x-app-layout>
    <x-slot name="header">
        <h2 class="page-title">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="page">
        <div class="page__container page__container--stacked">
            <div class="page__card">
                <div class="page__card-content">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="page__card">
                <div class="page__card-content">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="page__card">
                <div class="page__card-content">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>