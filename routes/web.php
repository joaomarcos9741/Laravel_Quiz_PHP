<?php

use Illuminate\Support\Facades\Http;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/iniciar', [App\Http\Controllers\controllerQuiz::class, 'index'])->name('iniciar');
Route::post('/dadosPagina01', [App\Http\Controllers\controllerQuiz::class, 'dadosPagina01'])->name('dadosPagina01');
Route::post('/dadosPagina02', [App\Http\Controllers\controllerQuiz::class, 'dadosPagina02'])->name('dadosPagina02');
Route::post('/dadosPagina03', [App\Http\Controllers\controllerQuiz::class, 'dadosPagina03'])->name('dadosPagina03');
Route::post('/dadosPagina04', [App\Http\Controllers\controllerQuiz::class, 'dadosPagina04'])->name('dadosPagina04');
Route::post('/dadosPagina05', [App\Http\Controllers\controllerQuiz::class, 'dadosPagina05'])->name('dadosPagina05');



