<?php

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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('inscricao','InscricaoController');

Route::resource('certificado','CertificadoController');


//Route::resource('avaliacao','AvaliacaoController');

Route::resource('curso','CursoController');
Route::get('curso/{curso}/report', 'CursoController@report')->name('curso.report');


Route::put('cursos/{curso}/enable', 'CursoController@enable')->name('cursos.enable');
Route::put('cursos/{curso}/disable', 'CursoController@disable')->name('cursos.disable');

Route::put('inscricoes/{inscricao}/enable', 'InscricaoController@enable')->name('inscricoes.enable');
Route::put('inscricoes/{inscricao}/disable', 'InscricaoController@disable')->name('inscricoes.disable');



Route::get('/curso/apagar/{id}', 'CursoController@destroy');
Route::get('/inscricao/apagar/{id}', 'InscricaoController@destroy');


Route::get('/inscricao/{inscricao}/avaliacoes/nova', 'RegistroController@create')->name('avaliacoes.create');

Route::get('/inscricao/{inscricao}/avaliacoes', 'RegistroController@index')->name('avaliacoes.index');
Route::post('/inscricao/{inscricao}/avaliacoes', 'RegistroController@store')->name('avaliacoes.store');


Route::get('certificado/{certificado}/report', 'CertificadoController@report')->name('certificado.report');

Route::put('cursos/{curso}/enable', 'CursoController@enable')->name('cursos.enable');
Route::put('cursos/{curso}/disable', 'CursoController@disable')->name('cursos.disable');
    


Route::get('certificado/{certificado}/report', 'CertificadoController@report')->name('certificado.report');
    