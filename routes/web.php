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
    return view('FrontOffice.welcome');
})->name('accueil');

Route::get('/gallery', function () {
    return view('FrontOffice.gallery');
})->name('gallery');

Route::get('/Admin', function () {
    return view('BackOffice.welcome');
})->middleware('auth');

Route::resource('salle','SalleController');
Route::resource('chambre','ChambreController');
Route::resource('reservation','ReservationController');
Route::resource('message','MessageController');
Route::resource('state','StateController')->middleware('auth');
Route::resource('notification','NotificationController')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
