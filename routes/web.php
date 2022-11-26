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

Route::get('vistauno', 'App\Http\Controllers\microntrolador@vista1');
Route::get('vistados', 'App\Http\Controllers\microntrolador@vista2');


Route::get('registramedicina', 'App\Http\Controllers\microntrolador@registramedicina')->name('registramedicina');
Route::post('guardarmedicina', 'App\Http\Controllers\microntrolador@guardarmedicina')->name('guardarmedicina');

Route::get('consultamedicina', 'App\Http\Controllers\microntrolador@consultamedicina')->name('consultamedicina');
Route::get('eliminar/{id}', 'App\Http\Controllers\microntrolador@eliminarmedicina')->name('eliminarmedicina');

Route::get('muestra/{id}', 'App\Http\Controllers\microntrolador@muestramedicina')->name('muestramedicina');
Route::POST('editar/{id}', 'App\Http\Controllers\microntrolador@editamedicina')->name('editamedicina');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
