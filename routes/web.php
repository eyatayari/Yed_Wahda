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

Route::get('/home', function () {
    return view('index');
})->name('home');
Route::get('/quarantaine', 'QuarantaineController@index');
Route::get('/q/{id}', 'QuarantaineController@edit')->name('quarantaine.edit');
Route::delete('/q1/{id}', 'QuarantaineController@destroy')->name('quarantaine.destroy');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register', 'Auth\RegisterController@showRegisterForm')->name('register');
Route::post('/registerQuarantaine', 'Auth\RegisterController@createQuarantaine')->name('createQuarantaine');
Route::post('/registerBenevole', 'Auth\RegisterController@createBenevole')->name('createBenevole');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('Login');

Route::post('/login/','Auth\LoginController@LoginVerification')->name('LoginVerification');
/*
Route::group(['middleware' => ['auth']], function () {*/
    Route::get('login/benevole', 'BenevoleController@showDashboard')->name('BenevoleshowDashboard');
/*});*/
Route::get('/', 'HomeController@index')->name('eya');
Route::get('/DashboardQuarantaine', 'QuarantaineController@QuarantaineShowDashboard')->name('QuarantaineShowDashboard');