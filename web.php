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


Route::get('/', function (){
    return view('welcome');
});

Route::get('/uts','produksController@index');

Route::get('/prak9','Prak9Controller@QB_tugas1');
Route::get('/prak9_02','Prak9Controller@QB_tugas2');
Route::get('/prak9_03','Prak9Controller@QB_tugas3');

Route::resource('/prak10','Prak10Controller');
Route::resource('/prak11','Prak11Controller');