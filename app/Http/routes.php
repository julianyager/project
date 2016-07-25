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
Route::group(['middlewareGroups'], function () {

	Route::get('begin', function() {
		flash('You are now signed in!');

		return redirect('/');
	});


Route::get('/', function()
	{
		return view('welcome');
	});
});

// about(name) , PagesController@home(controller)
Route::get('about', 'PagesController@controllerAbout');

// cmd cd documents\github\project
// vagrant reload (if already existant)
// to start server go to smarTTY and login with pass vagrant
// current video on laracast is How to Manage Your CSS and JS
// https://laracasts.com/series/laravel-5-from-scratch/episodes/9?autoplay=true

Route::get('cards', 'CardsController@index');
Route::get('cards/{card}', 'CardsController@show');
Route::post('cards/{card}/notes', 'NotesController@addNote');

Route::get('notes/{note}/edit', 'NotesController@edit');

Route::patch('notes/{note}', 'NotesController@update');

Route::auth();

Route::get('foobar', function () {
	$user = new App\User;

	$user->username= 'JohnAdministratorDoe';
	$user->email='john@example.com';
	$user->password= bcrypt('password');
	$user->save();

	return 'Done';
});

Route::get('/dashboard', 'HomeController@index');
