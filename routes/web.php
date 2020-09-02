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



//Actividades
	Route::post('admin/activities/store', 'ActivitiesController@store')->name('admin.activities.store');
	
	Route::get('admin/activities', 'ActivitiesController@index')->name('admin.activities.index');
	
	Route::get('admin/activities/create', 'ActivitiesController@create')->name('admin.activities.create');
	
	Route::put('admin/activities/{activities}', 'ActivitiesController@update')->name('admin.activities.update');
	
	Route::get('admin/activities/{activities}', 'ActivitiesController@show')->name('admin.activities.show');
	
	Route::delete('admin/activities/{activities}', 'ActivitiesController@destroy')->name('admin.activities.destroy');
	
	Route::get('admin/activities/{activities}/edit', 'ActivitiesController@edit')->name('admin.activities.edit');

//Promotores
	Route::get('admin/users', 'UserController@index')->name('admin.users.index');

	Route::put('admin/users/{user}', 'UserController@update')->name('admin.users.update');

	Route::get('admin/users/{user}', 'UserController@show')->name('admin.users.show');

	Route::delete('admin/users/{user}', 'UserController@destroy')->name('admin.users.destroy');

	Route::get('admin/users/{user}/edit', 'UserController@edit')->name('admin.users.edit');

	//Grupos
	Route::post('grupos/store', 'GruposController@store')->name('grupos.store');

	Route::get('grupos/create', 'GruposController@create')->name('grupos.create');

	Route::get('/grupos', 'GruposController@index')->name('grupos.index');

	Route::put('grupos/{grupos}', 'GruposController@update')->name('grupos.update');

	Route::get('grupos/{grupos}', 'GruposController@show')->name('grupos.show');

	Route::get('grupos/{grupos}/lista', 'GruposController@lista')->name('grupos.lista');
	

	Route::delete('grupos/{grupos}', 'GruposController@destroy')->name('grupos.destroy');

	Route::get('grupos/{clases}/clase', 'GruposController@clase')->name('grupos.clase');
	Route::put('grupos/clasestore', 'GruposController@clasestore')->name('grupos.clasestore');
	Route::get('grupos/{grupos}/edit', 'GruposController@edit')->name('grupos.edit');

	//Alumnos

	Route::get('alumnos/{grupos}/create', 'AlumnosController@create')->name('alumnos.create');	
	Route::post('alumnos/{grupos}/store', 'AlumnosController@store')->name('alumnos.store');	
	Route::put('alumnos/{alumnos}', 'AlumnosController@update')->name('alumnos.update');
	Route::get('alumnos/{alumnos}', 'AlumnosController@show')->name('alumnos.show');
	Route::get('alumnos/{alumnos}/edit', 'AlumnosController@edit')->name('alumnos.edit');
	Route::delete('alumnos/{alumnos}', 'AlumnosController@destroy')->name('alumnos.destroy');