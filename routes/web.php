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
    return view('welcome');
});

Route::get('/accueil', function () {
    return view('accueil');
});
Route::get('/service', function () {
    return view('service');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::resource('cvs','Cvcontrollers');
Route::get('/getexperiences/{id}','CvControllers@getExperiences');
Route::post('/addexperience','CvControllers@addExperience');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('cvs/{id}/show', 'Cvcontrollers@show' );
