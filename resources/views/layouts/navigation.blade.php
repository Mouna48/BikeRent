<nav x-data="{ open: false }" class="navigation">
    <!-- Primary Navigation Menu -->
    <div class="navigation__container">
        <div class="navigation__content">
            <div class="navigation__left">
                <!-- Logo -->
                <div class="navigation__logo">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="navigation__logo-icon" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="navigation__links">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="navigation__settings">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="navigation__user-button">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="navigation__arrow">
                                <svg class="navigation__arrow-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="navigation__hamburger">
                <button @click="open = ! open" class="navigation__hamburger-button">
                    <svg class="navigation__hamburger-icon" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path x-show="! open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div x-show="open" class="navigation__responsive">
        <div class="navigation__responsive-links">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="navigation__responsive-settings">
            <div class="navigation__user-info">
                <div class="navigation__user-name">{{ Auth::user()->name }}</div>
                <div class="navigation__user-email">{{ Auth::user()->email }}</div>
            </div>

            <div class="navigation__responsive-options">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>