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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::resource('/movies','adminController');
Route::resource('/categories','categoryController');
//Route::get('/categories', 'customControls@getCategories');
Route::get('/add', 'customControls@addMovie');
//Route::post('/save','customControls@store');
//Route::get('/Movies','customControls@getMovies');
//Route::resource('/Movies','adminController');


