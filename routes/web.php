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
Route::get('profile','HomeController@profile')->name('profile');
Route::post('profile/set','HomeController@setprofile');
Route::post('profile/berkas/set','HomeController@addingberkas');
Route::get('profile/berkas/hapus/{id}','HomeController@deleteberkas');
Route::get('pemberkasan','HomeController@pemberkasanindex');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/ubah', 'HomeController@ubah')->name('password');
Route::post('/berkas/{id}/', 'HomeController@berkasindex');

Route::group(['middleware' => 'admin'], function(){
	Route::get('/admin','AdminController@admin_index');
	Route::get('/matkul', 'AdminController@index_matkul');
	Route::get('/matkul/add', 'AdminController@add_matkul');
	Route::post('/matkul/save', 'AdminController@save_matkul');
	Route::get('/matkul/edit/{id}', 'AdminController@edit_matkul');
	Route::post('/matkul/update', 'AdminController@update_matkul');
	Route::get('/matkul/delete/{id}', 'AdminController@delete_matkul');
	Route::get('/dataadmin', 'AdminController@dataadmin');
	Route::get('/dataadmin/add', 'AdminController@addadmin');
	Route::post('/dataadmin/save', 'AdminController@saveadmin');
	Route::get('/dataadmin/edit/{id}','AdminController@editadmin');
	Route::post('/dataadmin/update','AdminController@updateadmin');
	Route::get('/dataadmin/delete/{id}','AdminController@deleteadmin');
});
