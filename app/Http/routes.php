<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','SiteController@home');
Route::get('/quem-somos', 'SiteController@quem_somos');
Route::get('/fale-conosco', 'SiteController@fale_conosco');
Route::get('/cursos', 'SiteController@cursos');
Route::get('/cursos/cursos-livres', 'SiteController@cursos_livres');
Route::get('/cursos/cursos-livres/{name}', 'SiteController@cursos_livres_detalhes');
Route::get('/cursos/pacote-de-cursos','SiteController@pacote_de_cursos');
