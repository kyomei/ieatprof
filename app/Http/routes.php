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

Route::get('/', function () {
    return view('welcome');
});

Route::get('quem-somos', function(){
    return '<h1>Página quem somos</h1>';
});
Route::get('fale-conosco', function(){
    return '<h1>Página fale-conosco</h1>';
});
Route::get('cursos', function(){
    return '<h1>Página cursos</h1>';
});
Route::get('cursos/cursos-livres', function(){
    return '<h1>Página cursos livres</h1>';
});
Route::get('cursos/pacote-de-cursos', function(){
    return '<h1>Página pacote de cursos</h1>';
});
