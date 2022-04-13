<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursosController;

//Route::get('/', 'CursosController@home')->name('home');//ruta tipo laravel 7
Route::get('/', [CursosController::class, 'home'])->name('home');
Route::get('VerCurso/{SeeCurso:slug}', [CursosController::class, 'ShowCourse'])->name('ShowCourse');

//Route::get('VerCurso/{SeeCurso:slug}', 'CursosController@ShowCourse')->name('ShowCourse');
/*ruta tipo laravel7, solo hay que descomentar de app\Providers\RouteServiceProvider.php la 
linea protected $namespace = 'App\Http\Controllers';`*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
