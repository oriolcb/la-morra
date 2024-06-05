<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MorraController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Aquí és on pots registrar les rutes de l'API per a la teva aplicació.
| Aquestes rutes són carregades pel RouteServiceProvider i totes elles
| seran assignades al grup de middleware "api". Fes alguna cosa genial!
|
*/

Route::post('/play', [MorraController::class, 'play']);
