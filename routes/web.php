<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

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

Route::get('/cadastrar', 'SiteController@registro');

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
 * ROTAS PARA RESET DE PASSWORD
 */
Route::get('/esqueci-senha', 'UserController@passwordRequest')->middleware('guest')->name('password.request');

Route::post('/esqueci-senha', 'UserController@passwordEmail')->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', 'UserController@passwordReset')->middleware('guest')->name('password.reset');

Route::post('/reset-password', 'UserController@passwordUpdate')->middleware('guest')->name('password.update');

//---------FIM DAS ROTAS DE RESET
/**
 * ROTAS DO ADMIN
 */
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('adminIndex');

    Route::get('/pacientes', 'AdminController@pacientes')->name('pacientes');
    Route::get('/paciente/show', 'UserController@show')->name('showPaciente');
    Route::get('/paciente/ficha/{user}', 'AdminController@fichaPaciente')->name('fichaPaciente');

    Route::get('/laboratorios', 'LaboratorioController@show')->name('labs');
    Route::post('/laboratorio/put', 'LaboratorioController@store')->name('cadLab');
    Route::get('/laboratorio/show', 'LaboratorioController@show')->name('showLabs');

    Route::post('/envio/exame', 'ExameController@store')->name('envioExame');
    Route::get('/exame/del/{exame}', 'ExameController@destroy')->name('exameDel');

    Route::get('/publicidade', 'UserController@publicidadeView')->name('pubView');
    Route::post('/publicidade/cadastrar', 'UserController@cadastrarPublicidade')->name('cadPub');
    Route::get('/publicidade/delete/{id}', 'UserController@deletePub')->name('deletePub');

    Route::get('/medicos', 'AdminController@medicos')->name('medicoIndex');
    Route::get('/medico/cadastrar', 'MedicoController@create')->name('medicoCreate');
    Route::post('/medico/salvar', 'MedicoController@store')->name('medicoStore');
    Route::get('/medico/editar/{medico}', 'MedicoController@edit')->name('medicoEdit');
    Route::put('/medico/alterar/{medico}', 'MedicoController@update')->name('medicoUpdate');
    Route::delete('/medico/deletar', 'MedicoController@delete')->name('medicoDelete');

    Route::get('/farmacias', 'AdminController@farmacias')->name('farmaciaIndex');
    Route::get('/farmacia/cadastrar', 'FarmaciaController@create')->name('farmaciaCreate');
    Route::post('/farmacia/salvar', 'FarmaciaController@store')->name('farmaciaStore');
    Route::get('/farmacia/editar/{farmacia}', 'FarmaciaController@edit')->name('farmaciaEdit');
    Route::put('/farmacia/alterar/{farmacia}', 'FarmaciaController@update')->name('farmaciaUpdate');
    Route::delete('/farmacia/deletar', 'FarmaciaController@destroy')->name('farmaciaDelete');
});

/**
 * ROTAS DO USUARIO
 */
Route::middleware(['auth', 'user'])->prefix('usuario')->group(function(){
        
    //Rota para o Index
    Route::get('/', 'UserController@index')->name('userIndex'); 
    
    //Rota para a tela da primeira dose do Covid
    Route::get('/primeira-dose', 'UserController@dose1')->name('dose1');
    
    //Rota para a tela da segunda dose do Covid
    Route::get('/segunda-dose', 'UserController@dose2')->name('dose2');

    //Rota para a tela da carteira de vacinação
    Route::get('/carteira-vacinacao', 'UserController@carteiraVacina')->name('carteiraVacina');

    Route::get('/exames', 'UserController@exames')->name('examesUser');

    //Rota de apresentação das informações do usuario
    Route::get('/informacoes', 'UserController@edit')->name('perfilUser');

    //Rota de alteração dos dados do usuário
    Route::put('/informacoes/update/{user}', 'userController@update')->name('alteruser');

    
    //Rota para manipulação de arquivos
    Route::post('/arquivo/upload', 'ArquivosController@UploadImage')->name('uploadImage');
    Route::get('carteira-vacinacao/del/{id}', 'ArquivosController@deleteImage')->name('carteiraVacinacaoDel');
});