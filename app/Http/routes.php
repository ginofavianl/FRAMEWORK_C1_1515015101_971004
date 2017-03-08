<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'HomeController@index');

Route::get('pengguna/{pengguna?}', function ($pengguna="Gino") {
    return "Hello World dari Pengguna $pengguna";
});

Route::get('berita/{berita?}', function ($berita="laravel 5") {
    return "Berita $berita belum dibaca";
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('anggota','AnggotaController');
Route::resource('anggota.hobi','HobiController');
