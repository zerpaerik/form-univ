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
    return view('generics.logview');
})->middleware('auth');


Route::get('datatables', 'DatatableController@index')->name('datatables.index')->middleware('auth');


Route::get('roles', 'Users\RoleController@index')->name('role.index')->middleware('auth');
Route::get('role-create', 'Users\RoleController@createView')->name('role.create')->middleware('auth');
Route::post('role/create', 'Users\RoleController@create')->middleware('auth');
Route::get('role/{id}', 'Users\RoleController@delete')->middleware('auth');

Route::get('users-password-edit', 'Users\UserController@updatepasswd')->name('users.password');
Route::post('users/updatepassw', 'Users\UserController@updatepass');
Route::get('user-delete-{id}','Users\UserController@delete');



Route::get('registros', 'RegistroController@index')->name('registros.index')->middleware('auth');
Route::get('registros-create', 'RegistroController@createView')->name('registros.create')->middleware('auth');
Route::post('registros/create', 'RegistroController@create')->middleware('auth');
Route::get('registros/{id}', 'RegistroController@delete')->middleware('auth');
Route::get('registros-edit-{id}', 'RegistroController@editView')->name('registros.edit');
Route::post('registros/edit', 'RegistroController@edit');
Route::get('registros-delete-{id}','RegistroController@delete');




Route::get('user', 'Users\UserController@index')->name('users.index')->middleware('auth');
Route::post('user/create', 'Users\UserController@create')->middleware('auth');
Route::get('user/{id}', 'Users\UserController@delete')->middleware('auth');

Route::get('/ui', function () { return view('layouts.admin'); })->name('ui');
Route::get('login', 'Users\UserController@loginView')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('user-create', 'Users\UserController@createView')->name('user.create')->middleware('auth');

