<nav>
    <a href="{{ route('bikes.index') }}">Catálogo</a>

    @auth
        <a href="{{ route('bookings.index') }}">Mis reservas</a>
        <a href="{{ route('profile.edit') }}">Perfil</a>
        <span>{{ Auth::user()->name }}</span>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Cerrar sesión</button>
        </form>
    @else
        <a href="{{ route('login') }}">Iniciar sesión</a>
        <a href="{{ route('register') }}">Registrarse</a>
    @endauth
</nav>
<hr>