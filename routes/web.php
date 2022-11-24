<?php

use App\Http\Controllers\KorisnikController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/korisnik', KorisnikController::class);
Route::resource('/proizvod', ProizvodController::class);
Route::resource('/uloga', UlogaController::class);
Route::resource('/kategorija', KategorijaController::class);
