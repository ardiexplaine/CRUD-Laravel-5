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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


// Provide controller methods with object instead of ID
Route::model('tasks', 'Task');
Route::model('projects', 'Project');

//Route::resource('artikel', 'ArtikelController');
Route::get('artikel', 'ArtikelController@index');
Route::get('artikel/create','ArtikelController@create');
Route::post('artikel/create','ArtikelController@store');
Route::get('artikel/edit/{id}', 'ArtikelController@edit');
Route::post('artikel/update/{id}', 'ArtikelController@update');
Route::get('artikel/destroy/{id}','ArtikelController@destroy');
Route::get('artikel/search','ArtikelController@search');

 
// Use slugs rather than IDs in URLs
Route::bind('tasks', function($value, $route) {
	return App\Task::whereSlug($value)->first();
});
Route::bind('projects', function($value, $route) {
	return App\Project::whereSlug($value)->first();
});
 
Route::resource('projects', 'ProjectsController');
Route::resource('projects.tasks', 'TasksController');

