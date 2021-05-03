<?php

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

/**
 * ROTAS DO SITE
 */
Route::get('/', function () {
    return view('index');
});

Route::get('/entrar', function () {
    return view('login');
})->name('entrar');

Route::get('/cadastrar', function(){
    return view('registro');
});

Route::get('/termos-uso', function(){
    return view('termos-uso');
});

Route::get('/contato', function(){
    return view('contato');
});

Route::prefix('usuario')->group(function () {
    Route::post('entrar', 'UserController@login')->name('login');
    Route::post('cadastrar', 'UserController@register')->name('register');
});

/**
 * ROTAS DO ADMIN
 */
//middleware(['auth'])->
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });
});
