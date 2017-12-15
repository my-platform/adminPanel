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
    return view('welcome');
});
Route::resource('home','adminController');
Route::get('categories', function () {
    return view('admin.categories');
});
Route::get('categories/add', 'customControls@getList');
Route::post('/save','customControls@store');


