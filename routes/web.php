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

//Routes Benevoles

Route::group(['Middleware' => ['auth','BenevolePermission']], function () {
    Route::get('login/benevole', 'BenevoleController@showDashboard')->name('BenevoleshowDashboard');
    Route::get('/logout','Auth\LoginController@Logout')->name('logout');
});


//Routes Quarantaines
Route::group(['Middleware' => ['auth','QuarantainePermission']], function () {
    route::post('/','DemandeCourseController@store')->name('storecourse');
    Route::get('/DashboardQuarantaine', 'QuarantaineController@QuarantaineShowDashboard')->name('QuarantaineShowDashboard');

});


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

Route::post('/login/eya','Auth\LoginController@LoginVerification')->name('LoginVerification');
/*
Route::group(['middleware' => ['auth']], function () {*/
    Route::get('login/benevole', 'BenevoleController@showDashboard')->name('BenevoleshowDashboard');

/*});*/
Route::get('/afficheBenevole', 'BenevoleController@index')->name('afficheBenevole');

Route::get('/confirmé/{id}', 'DemandeCourseController@confirmé')->name('confirmé');
Route::post('/storecourse', 'DemandeCourseController@store')->name('storecourse');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::post('/login/','Auth\LoginController@LoginVerification')->name('LoginVerification');

//Route::get('/', 'HomeController@index')->name('eya');

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/', 'DemandeCourseController@create')->name('demandecourse');
Route::get('/confirme/{id}/{idb}', 'DemandeCourseController@confirme')->name('confirme');
Route::post('/storecourse', 'DemandeCourseController@store')->name('storecourse');





Route::get('dynamic_dependent/fetch/{id}', 'Auth\RegisterController@myformAjax')->name('dynamicdependent.fetch');



