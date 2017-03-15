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

Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');

Route::get('dosen','DosenController@awal');
Route::get('dosen/tambah','DosenController@tambah');

Route::get('dosen_matakuliah','Dosen_MatakuliahController@awal');
Route::get('dosen_matakuliah/tambah','Dosen_MatakuliahController@tambah');

Route::get('jadwal_matakuliah','Jadwal_MatakuliahController@awal');
Route::get('jadwal_matakuliah/tambah','Jadwal_MatakuliahController@tambah');

Route::get('mahasiswa','MahasiswaController@awal');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');

Route::get('matakuliah','MatakuliahController@awal');
Route::get('matakuliah/tambah','MatakuliahController@tambah');

Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/tambah','RuanganController@tambah');

Route::get('pengguna/add',function(){
		$pengguna = new App\pengguna();
		$pengguna->username = 'yo';
		$pengguna->password = 'hihi';
		$pengguna->save();
		return "Data Dengan Username {$pengguna->username} telah  disimpan";
	});

/*
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
*/