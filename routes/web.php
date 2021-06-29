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
    })->name('landingpage');
Route::get('create', function() {
	return view('students.create');
	
});
Route::get('students', function() {
	return view('students');
});

Route::resource('/students','StudentController');
Route::get('/student/{id}/cetak', 'StudentController@cetak')->name('student.cetak');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
