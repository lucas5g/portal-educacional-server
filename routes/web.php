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

Route::get('/', function () {
    return ['web' => 'Build page web'];
});



// Route::get('users', 'UserController@index' );
// // Route::
// Route::get('usuarios', 'Form\\TestController@listAllUsers')->name('users.listAll');
// Route::get('usuarios/novo', 'Form\\TestController@formAddUser');
// Route::get('usuarios/editar/{user}', 'Form\\TestController@formEditUser')->name('users.edit');
// Route::get('usuarios/{user}', 'Form\\TestController@listUser');

// Route::post('usuarios/store', 'Form\\TestController@storeUser')->name('users.store');

// Route::put('usuarios/edit/{user}', 'Form\\TestController@edit')->name('users.edit');

// Route::delete('usuarios/destroy/{user}', 'Form\\TestController@destroy')->name('user.destroy');