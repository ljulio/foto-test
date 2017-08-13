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

/**
###########################################
Rutas secciones públicas del site
###########################################
*/
Route::get('/', function () {

	//$user_name = Auth::check() ? Auth::user()->name : null;
	$user_name = Auth::check() ? Auth::user()->name : null;
	//dd($user_name);

	$properties = App\Propertie::get();

    return view('fundation',[ 'properties' => $properties , 'user_name' => $user_name]);
});


/**
########################################
Rutas para administrar las propiedades
############################################
**/
/*
Route::get('/propiedades', function () {
	if( !Auth::check() )
		return redirect('auth/login');
	$properties = App\Propertie::get();
    return view('properties.index', [ 'properties' => $properties ]);
});*/

Route::get('propiedades/', 'PropertieController@index');
Route::get('propiedades/create', 'PropertieController@create');
Route::post('propiedades/create', 'PropertieController@store');
Route::get('propiedades/{id}', 'PropertieController@show');
Route::post('propiedades/{id}', 'PropertieController@update');
Route::get('propiedades/destroy/{id}', 'PropertieController@destroy');



/*
###########################################
Rutas para administrar los usuarios
###########################################
*/
Route::get('/usuarios', function () {
	if( !Auth::check() )
		return redirect('auth/login');

	$users = App\User::get();
    return view('usuarios.list_users', [ 'users' => $users ]);
});

Route::get('auth/login','Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');

Route::get('auth/register','Auth\AuthController@getRegister');
Route::post('auth/register','Auth\AuthController@postRegister');

Route::get('auth/logout', function()
	{
		Auth::logout();
		return redirect('/');
	});