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

Route::get('/wel', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return view('hello');
});
Route::get('/user','App\Http\Controllers\Controller@index');

// Route::resource('dogs', DogController::class);
// Route::get('/dog', 'App\Http\Controllers\DogController@index');
Route::resource('cars', 'App\Http\Controllers\CarController');
Route::resource('students', 'App\Http\Controllers\StudentController');
Route::get('cars/delete/{car}', 'App\Http\Controllers\CarController@delete')->name('cars.delete');
Route::post('cars/delete', 'App\Http\Controllers\CarController@deleteByAjax');
Route::get('students/delete/{student}', 'App\Http\Controllers\StudentController@delete')->name('students.delete');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
