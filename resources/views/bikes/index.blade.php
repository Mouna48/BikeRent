@include('bikes.nav')
<h1>Catálogo de bicicletas</h1>

@forelse ($bikes as $bike)
    <article>
        <h2>{{ $bike->model }}</h2>
        <p>Precio por hora: {{ $bike->price_per_hour }} €</p>
        <p>Estado: {{ $bike->status }}</p>
        <a href="{{ route('bikes.show', $bike) }}">Ver detalle</a>
    </article>
    <hr>
@empty
    <p>No hay bicicletas.</p>
@endforelse