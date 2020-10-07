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


Route::get('/create-Customerr', 'CustomerrController@create');
Route::post('/create-Customerr', 'CustomerrController@create_post');
Route::get('/get-Customerr', 'CustomerrController@get');
Route::get('/edit-customerr/{id}', ['as'=>'edit','uses'=>'CustomerrController@edit']);
Route::post('/edit-customerr/{id}', ['as'=>'edit_post','uses'=>'CustomerrController@edit_post']);
Route::get('/delete-customerr/{id}', ['as'=>'delete','uses'=>'CustomerrController@delete']);