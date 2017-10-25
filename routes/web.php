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
/*
Route::get('/', function () {
    return view('pages/opening');
});
*/

Route::get('/', 'controller_home@index')->name('home');
Route::get('/api', 'controller_home@api')->name('api');

Route::get('data', 'controller_data@index')->name('data');
Route::get('data/sub/{slug_md}', 'controller_data@tampil_klas')->name('klasif');
Route::get('data/get/{filename}', 'controller_data@get')->name('getdoc');
Route::get('data/search','controller_data@search')->name('getsearch');
Route::get('data/detail/{slug}', 'controller_data@detail')->name('detail');
Route::get('data/show/{id}', 'controller_data@showcsv')->name('showcsv');
Route::get('data/show2/{id}', 'controller_data@showcsv2')->name('showcsv2');

Route::get('adm', 'Controller_admData@index')->name('adm');
Route::post('adm/posting', 'Controller_admData@addData')->name('posting');
Route::get('adm/edit_posting/{id}', 'Controller_admData@editData');
Route::post('adm/update_posting/{id}', 'Controller_admData@updateData');

Route::get('/gate', function(){
  return view('auth.login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
