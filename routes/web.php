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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/afficheBenevole', 'BenevoleController@index')->name('afficheBenevole');
Route::get('/demandecourse', 'DemandeCourseController@create')->name('demandecourse');
Route::get('/confirmé/{id}', 'DemandeCourseController@confirmé')->name('confirmé');
Route::post('/storecourse', 'DemandeCourseController@store')->name('storecourse');
Route::get('/demandecoursenonconfirmé', 'DemandeCourseController@indexnonconfirmé')->name('demandecoursenonconfirmé');
Route::get('/demandecourseconfirmé', 'DemandeCourseController@indexconfirmé')->name('demandecourseconfirmé');