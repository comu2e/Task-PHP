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

Route::get('task','\App\Http\Controllers\TaskController@index');

Route::get('task/add','\App\Http\Controllers\TaskController@add')->name('task.add');
Route::post('task/add','\App\Http\Controllers\TaskController@create');
Route::post('task/destroy{id?}','\App\Http\Controllers\TaskController@destroy')->name('task.destroy');
