@include('bikes.nav')
<h1>{{ $bike->model }}</h1>

<p>Número de serie: {{ $bike->serial_number }}</p>
<p>Precio por hora: {{ $bike->price_per_hour }} €</p>
<p>Estado: {{ $bike->status }}</p>

<a href="{{ route('bikes.index') }}">Volver al catálogo</a>