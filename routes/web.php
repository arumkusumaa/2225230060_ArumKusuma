<?php

use App\Http\Controllers\PembelajaranController;
Route::get('/', function () {
    return view('welcome');
});
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

// Contoh penggunaan rute-rute dari PembelajaranController
Route::get('/pembelajaran', [PembelajaranController::class, 'index']);
Route::get('/pembelajaran/create', [PembelajaranController::class, 'create']);
Route::post('/pembelajaran', [PembelajaranController::class, 'store']);
Route::get('/pembelajaran/{id}/edit', [PembelajaranController::class, 'edit']);
Route::put('/pembelajaran/{id}', [PembelajaranController::class, 'update']);
Route::delete('/pembelajaran/{id}', [PembelajaranController::class, 'destroy'])
;
