<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegistroController;
use GuzzleHttp\Middleware;

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
    return view('auth.login');
});

/* Route::get('/', function () {
    if (Auth::check()) {
        return view('home');
    } else {
        return view('home');
    }
}); */


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('registro', RegistroController::class)->middleware('auth'); /* Impedimos la entrada en el registro sin estar logueado */
Route::resource('auth', RegistroController::class)->middleware(!'auth'); /* Impedimos loguear a los ya logueados */