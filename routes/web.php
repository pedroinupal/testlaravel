<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConferenciasController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\DivisionesController;
use App\Http\Controllers\CitiesController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/conferences',ConferenciasController::class);
Route::resource('/teams',TeamsController::class);
Route::resource('/divisions',DivisionesController::class);
Route::resource('/cities',CitiesController::class);
