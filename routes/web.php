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


Route::get('/unduh/berkas/{filename}', function ($filename)
{
    $path = storage_path('file') . '/' . $filename;
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file);
    $response->header("Content-Type", $type);
    return $response;
});

Route::get('/','HomeController@index');
Route::get('profile','HomeController@profile');
Route::post('profile/set','HomeController@setprofile');
Route::post('profile/berkas/set','HomeController@addingberkas');
Route::get('profile/berkas/hapus/{id}','HomeController@deleteberkas');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'admin'], function(){
	Route::get('/aaa','HomeController@index');
});
