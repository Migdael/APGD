<?php
use App\Tipo;
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
Route::get('deportistas/{id}', 'DeportistasController@seleccion');

Route::get('Componentes/main', function () {

    $tipos  = Tipo::all();
    $tiposs = Tipo::orderBy('id', 'ASC')->pluck('tipo', 'id');
    return view('Componentes/main')->with('tipos', $tipos)->with('tiposs', $tiposs);
});

Route::resource('/', 'homeController');

Auth::routes();

Route::group(['prefix' => 'control', 'middleware' => 'auth'], function () {

    Route::resource('perfil', 'PerfilController');

    Route::resource('users', 'UsersController');
    Route::get('users/{id}/destroy', [
        'uses' => 'UsersController@destroy',
        'as'   => 'control/users/destroy',
    ]);

    Route::resource('deportes', 'DeportesController');
    Route::get('deportes/{id}/destroy', [
        'uses' => 'DeportesController@destroy',
        'as'   => 'control/deportes/destroy',
    ]);
    Route::resource('tipos', 'TiposController');
    Route::get('tipos/{id}/destroy', [
        'uses' => 'TiposController@destroy',
        'as'   => 'control/tipos/destroy',
    ]);

    Route::resource('instituciones', 'InstitucionesController');
    Route::get('instituciones/{id}/destroy', [
        'uses' => 'InstitucionesController@destroy',
        'as'   => 'control/instituciones/destroy',
    ]);

    Route::resource('deportistas', 'DeportistasController');
    Route::get('deportistas/{id}/destroy', [
        'uses' => 'DeportistasController@destroy',
        'as'   => 'control/deportistas/destroy',
    ]);

});
