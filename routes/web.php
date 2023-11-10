<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormatoController;


Route::get('/', function () {
    return view('welcome');
})->name('root');

Route::get('/formatos', [FormatoController::class, 'index'])->name('formatos.index');


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
