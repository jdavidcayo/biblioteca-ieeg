<?php

use App\Http\Controllers\FolletosContoller;
use App\Http\Controllers\ManualesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormatoController;
use App\Http\Controllers\InicioController;


Route::get('/', function () {
    return view('welcome');
})->name('root');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    ])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
        
        Route::get('/', function () {
            return view('welcome');
        })->name('indexVerified');
    });
    Route::get('Inicio', [InicioController::class, 'inicio']);
    Route::get('Manuales', [ManualesController::class,'manuales']);
    Route::get('Folletos', [FolletosContoller::class,'folletos']);
    Route::get('/formatos', [FormatoController::class, 'index'])->name('formatos.index');
