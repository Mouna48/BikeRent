<?php
use App\Http\Controllers\BikeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Página principal o catálogo público de bicicletas
Route::get('/', [BikeController::class, 'index'])->name('bikes.index');

// Ver los detalles de una bicicleta específica
Route::get('/bikes/{bike}', [BikeController::class, 'show'])->name('bikes.show');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {

    // 1. Proceso de creación de reservas
    // Formulario para crear una reserva para una bicicleta concreta
    Route::get('/bikes/{bike}/book', [BookingController::class, 'create'])->name('bookings.create');

    // Procesar y guardar la reserva en la base de datos
    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

    // 2. Gestión del historial de reservas del usuario
    // Listado de reservas del usuario autenticado
    Route::get('/my-bookings', [BookingController::class, 'index'])->name('bookings.index');

    // Detalle de una reserva del usuario
    Route::get('/my-bookings/{booking}', [BookingController::class, 'show'])->name('bookings.show');

    // Cancelar una reserva (si el estado lo permite)
    Route::patch('/my-bookings/{booking}/cancel', [BookingController::class, 'cancel'])->name('bookings.cancel');
});

require __DIR__.'/auth.php';
