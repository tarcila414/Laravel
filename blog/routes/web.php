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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello-world','HelloWorldController@index');
/*
*Primeiro teste de parâmetro dinâmico
Route::get('/post/{slug}',function($slug){
    return $slug;
});*/

//Adição de apelido a rota
Route::get('/post/{slug}',function($slug){
    return $slug;
})
->name('post.single');

//Rota para o UserControler
Route::resource('/users','UserController');