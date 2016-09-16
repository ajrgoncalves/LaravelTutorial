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

// Route::get('/', 'WelcomeController@index');
// Route::get('/', function (){
// 	return 'hello world';
// });

// Route::get('about', function (){
// 	return view('pages.about'); // resources/views/pages/about.blade.php
// });

// Route::get('/', function (){
// 	$people = ['Taylor', 'Jose', 'Becas'];

// 	return view('welcome', ['people' => $people]);
// });

// Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');


Route::get('cards', 'CardsController@index');
Route::get('cards/{card}', 'CardsController@show');

Route::post('cards/{card}/notes', 'NoteController@store');

Route::get('/notes/{note}/edit', 'NoteController@edit');
Route::patch('/notes/{note}','NoteController@update');