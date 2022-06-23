<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservacionesController;


Route::get('/', HomeController::class);
// GRUPO DE ROUTES
Route::controller(ReservacionesController::class)->group(function () {
    Route::get('reservaciones', 'index');

Route::get('reservaciones/create',  'create');

Route::get('reservaciones/{reservacion}','show');

});


 