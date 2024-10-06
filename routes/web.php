<?php

use App\Http\Controllers\EprController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatController;
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
Route::get('/matiere', [MatController::class, 'index']);
Route::get('/epreuve', [EprController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/tp1', function () {
    return view('affMat');
});
