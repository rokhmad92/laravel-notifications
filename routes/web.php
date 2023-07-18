<?php

use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(registerController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');

    Route::get('/baca/{id}/{notifId}', 'bacaNotif');
});
