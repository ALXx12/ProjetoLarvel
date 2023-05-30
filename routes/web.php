<?php

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
    return view('welcome');
});

Route::get('/sobre', function () {
    return view('base.sobre');
})->name('sobre');

Route::get('/noticias', function () {
    return view('base.noticias');
})->name('noticias');

Route::get('/colaboradores', function () {
    return view('base.colaboradores');
})->name('usuarios');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/funcionarios', [App\Http\Controllers\funcionariosController::class, 'index']);

Route::delete('/funcionarios/{id}', [App\Http\Controllers\funcionariosController::class, 'deletar_funcionario'])->name('deletar_funcionario');

Route::put('/funcionarios/{id}', [App\Http\Controllers\funcionariosController::class, "atualizar_funcionario"])->name('atualizar_funcionario');



