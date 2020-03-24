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
Route::get('/beranda', 'AuthController@index');
Route::get('/kependudukan', 'KependudukanController@kependudukan');
Route::group(['prefix' => 'fasilitas'], function(){
  Route::get('posyandu', 'fasilitasposyanduController@fasilitasposyandu');
});


Route::get('/kontak', 'kontakController@kontak');
Route::get('/galery', 'GaleryController@galery');
Route::get('/berita', 'BeritaController@berita');
Route::get('/berita_detail/{id}', 'BeritaDetailController@berita_detail');
Route::get('/destinasi', 'destinasiController@destinasi');
Route::get('/destinasi_detail/{id}', 'destinasiDetailController@destinasi_detail');
Route::get('/destinasi_detail', 'destinasiDetailController@destinasi_detail');
Route::get('/inputkrisar', 'krisarController@getInput');
Route::post('/inputkrisar', 'krisarController@simpankrisar');


Route::get('/admin', 'adminController@admin')->middleware('adminchecker');
Route::get('/inputadmin', 'adminController@getInput');
Route::post('/inputadmin', 'adminController@simpanadmin');
Route::get('/editadmin/{id}', 'adminController@getEdit');
Route::post('/editadmin/{id}', 'adminController@ubahadmin');
Route::get('/hapusadmin/{id}', 'adminController@getDelete');
 
Route::get('password/change', 'Auth\AuthController@changePassword');
 Route::post('password/change', 'Auth\AuthController@postChangePassword');



Route::group(['middleware' => ['web', 'auth',]], function() {
  Route::resource('post','PostController');
  Route::POST('addPost','PostController@addPost');
  Route::POST('editPost','PostController@editPost');
  Route::POST('deletePost','PostController@deletePost');

Route::get('/skpd', 'skpdController@skpd');
Route::get('/dashboard', 'dashboardController@dashboard')->name('admin')->middleware('adminchecker');


  Route::get('/request', 'requestController@request');
  Route::get('/inputrequest', 'requestController@getInput');
  Route::post('/inputrequest', 'requestController@simpanrequest');
  Route::get('/editrequest/{id}', 'requestController@getEdit');
  Route::post('/editrequest/{id}', 'requestController@ubahrequest');
  Route::get('/editprogress/{id}', 'requestController@getEditt');
  Route::post('/ediprogress/{id}', 'requestController@ubahrequirement');

  Route::get('/hapusrequest/{id}', 'requestController@getDelete');

  Route::get('/progress', 'progressController@progress');


  Route::get('/requesta', 'requestaController@requesta')->name('admin')->middleware('adminchecker');
  Route::get('/requesta','requestaController@cari');
  Route::get('/inputrequesta', 'requestaController@getInput');
  Route::post('/inputrequesta', 'requestaController@simpanrequest');
  Route::get('/editrequesta/{id}', 'requestaController@getEdit');
  Route::post('/editrequesta/{id}', 'requestaController@ubahrequesta');
  Route::get('/hapusrequesta/{id}', 'requestaController@getDelete');

    Route::get('/profile', 'profileController@profile');
  Route::get('/inputprofile', 'profileController@getInput');
  Route::post('/inputprofile', 'profileController@simpanprofile');
  Route::get('/editprofile/{id}', 'profileController@getEdit');
  Route::post('/editprofile/{id}', 'profileController@ubahprofile');
  Route::get('/hapusprofile/{id}', 'profileController@getDelete');
  
  Route::get('/proskpd', 'proskpdController@proskpd');




  Route::post('/admin', 'adminController@admin')->name('admin')->middleware('adminchecker');


});

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
