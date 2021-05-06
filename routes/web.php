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

Route::get('/entrar', 'SiteController@entrar')->name('entrar');

Route::get('/cadastrar', function(){
    return view('registro');
});

Route::get('/termos-uso', function(){
    return view('termos-uso');
});

Route::get('/contato', function(){
    return view('contato');
});

//Rota de Login
Route::post('/login', 'UserController@login')->name('login');
    
//Rota de Cadastro
Route::post('/register', 'UserController@register')->name('register');

//Rota de Logout
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/admin');
});
/**
 * ROTAS DO ADMIN
 */
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('adminIndex');
});

/**
 * ROTAS DO USUARIO
 */
Route::middleware(['auth', 'user'])->prefix('usuario')->group(function(){
        
    //Rota para o Index
    Route::get('/', function () {
        return view('user.index');
    })->name('userIndex'); 
    
    //Rota para a tela da primeira dose do Covid
    Route::get('/primeira-dose', 'UserController@dose1')->name('dose1');

    Route::get('/primeira-dose/getImg', 'ArquivosController@getImg');
    
    //Rota para upload das imagens do Covid
    Route::post('usuario/primeira-dose/upload', 'ArquivosController@UploadImage')->name('uploadImage');
});