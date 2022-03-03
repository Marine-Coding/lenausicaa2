<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AvisClientsController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ViewController::class, 'accueil']);

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard']);
    Route::get('/reservations', [AdminController::class, 'reservations']);
});

Route::get('/avis_clients', [AvisClientsController::class, 'avisClients']);
