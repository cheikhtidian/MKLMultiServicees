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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('client/add', 'ClientController@add')->name('addclient');
Route::get('client/edit/{id}', 'ClientController@edit')->name('editclient');
Route::post('client/update', 'ClientController@update')->name('updateclient');
Route::get('client/delete/{id}', 'ClientController@delete')->name('deleteclient');
Route::get('client/getAll', 'ClientController@getAll')->name('getallclient');
Route::post('client/getAll', 'ClientController@persist')->name('persistclient');

Route::get('facture/add', 'FactureController@add')->name('addfacture');
Route::get('facture/edit/{id}', 'FactureController@edit')->name('editfacture');
Route::post('facture/update', 'FactureController@update')->name('updatefacture');
Route::get('facture/delete/{id}', 'FactureController@delete')->name('deletefacture');
Route::get('facture/getAll', 'FactureController@getAll')->name('getallfacture');

