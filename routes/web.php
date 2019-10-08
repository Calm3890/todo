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

Route::get('/todo','ctrller@index');
Route::get('/todo/new','ctrller@new_form');
Route::post('/todo','ctrller@save');
Route::get('/todo/edit/{id}','ctrller@edit_form');
Route::post('/todo/edit','ctrller@edit');
Route::get('/todo/delete/{id}','ctrller@delete');
Route::get('/todo/finished','ctrller@finished');