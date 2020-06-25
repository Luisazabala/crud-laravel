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
    return view('welcome');
});


Route::get('empresa', 'ControladorEmpresa@Index'
)->name('empresas.index');

Route::get('empresa/crear', 'ControladorEmpresa@create'
)->name('empresas.create');

Route::post('empresa', 'ControladorEmpresa@store'
)->name('empresas.store');

Route::get('empresa/{empresa}/editar', 'ControladorEmpresa@edit'
)->name('empresas.edit');

Route::match(['put', 'patch'],'empresa/{empresa}/editar', 'ControladorEmpresa@update'
)->name('empresas.update');

Route::delete('empresa/{empresa}', 'ControladorEmpresa@delete')->name('empresas.delete');
