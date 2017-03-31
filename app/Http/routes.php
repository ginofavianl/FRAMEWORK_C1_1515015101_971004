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

Route::get('/', function () {
    return view ('master');
});

Route::get('/hello-world', function () {
    return 'Gino Favian Leonardo';
});

Route::get('/coba/{var}', function($variabel){
	return $variabel;
});


Route::get('/hello/{var?}', function($variabel = "Belum ada isinya"){
	return $variabel;
});

//------------------------------------------------------------------

Route::get('/pengguna', 'PenggunaController@awal');

Route::get('/pengguna/tambah', 'PenggunaController@tambah');

//------------------------------------------------------------------

Route::get('/dosen', 'DosenController@awal');

Route::get('dosen/tambah', 'DosenController@tambah');

//------------------------------------------------------------------

Route::get('/mahasiswa', 'MahasiswaController@awal');

Route::get('/mahasiswa/tambah', 'MahasiswaController@tambah');

Route::get('/mahasiswa/tambah/route', function(){
		$mahasiswa = new App\Mahasiswa();
        $mahasiswa->nama = 'Gino Favian Leonardo';
        $mahasiswa->nim = '1515015101';
        $mahasiswa->alamat = 'Jl. P. Suryanata';
        $mahasiswa->pengguna_id = 3;
        $mahasiswa->save();
        return "Telah disave {$mahasiswa->nama} ke dalam databas";
});

//------------------------------------------------------------------

Route::get('/ruangan', 'RuanganController@awal');

Route::get('/ruangan/tambah', 'RuanganController@tambah');

//------------------------------------------------------------------

Route::get('/matakuliah', 'MatakuliahController@awal');

Route::get('/matakuliah/tambah', 'MatakuliahController@tambah');

//------------------------------------------------------------------

Route::get('/dosen_matakuliah', 'Dosen_matakuliahController@awal');

Route::get('/dosen_matakuliah/tambah', 'Dosen_MatakuliahController@tambah');

//------------------------------------------------------------------

Route::get('/jadwal_matakuliah', 'Jadwal_matakuliahController@awal');

Route::get('/jadwal_matakuliah/tambah', 'Jadwal_matakuliahController@tambah');

//------------------------------------------------------------------

Route::get('pengguna/lihat/{pengguna}', 'PenggunaController@lihat');
Route::post('pengguna/simpan', 'PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}', 'PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}', 'PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}', 'PenggunaController@hapus');

//------------------------------------------------------------------

Route::get('matakuliah/lihat/{matakuliah}', 'MatakuliahController@lihat');
Route::get('matakuliah/{matakuliah}', 'MatakuliahController@lihat');
Route::post('matakuliah/simpan', 'MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}', 'MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}', 'MatakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}', 'MatakuliahController@hapus');

//------------------------------------------------------------------

Route::get('ruangan/lihat/{ruangan}', 'RuanganController@lihat');
Route::post('ruangan/simpan', 'RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}', 'RuanganController@edit');
Route::post('ruangan/edit/{ruangan}', 'RuanganController@update');
Route::get('ruangan/hapus/{ruangan}', 'RuanganController@hapus');

//------------------------------------------------------------------

Route::get('mahasiswa/lihat/{mahasiswa}', 'MahasiswaController@lihat');
Route::post('mahasiswa/simpan', 'MahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}', 'MahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}', 'MahasiswaController@update');
Route::get('mahasiswa/hapus/{mahasiswa}', 'MahasiswaController@hapus');

//------------------------------------------------------------------

Route::get('dosen/lihat/{dosen}', 'DosenController@lihat');
Route::post('dosen/simpan', 'DosenController@simpan');
Route::get('dosen/edit/{dosen}', 'DosenController@edit');
Route::post('dosen/edit/{dosen}', 'DosenController@update');
Route::get('dosen/hapus/{dosen}', 'DosenController@hapus');

//------------------------------------------------------------------

Route::get('dosen_matakuliah/lihat/{dosen_matakuliah}', 'Dosen_matakuliahController@lihat');
Route::post('dosen_matakuliah/simpan', 'Dosen_matakuliahController@simpan');
Route::get('dosen_matakuliah/edit/{dosen_matakuliah}', 'Dosen_matakuliahController@edit');
Route::post('dosen_matakuliah/edit/{dosen_matakuliah}', 'Dosen_matakuliahController@update');
Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}', 'Dosen_matakuliahController@hapus');

//------------------------------------------------------------------

Route::get('jadwal_matakuliah/lihat/{jadwal_matakuliah}', 'Jadwal_matakuliahController@lihat');
Route::post('jadwal_matakuliah/simpan', 'Jadwal_matakuliahController@simpan');
Route::get('jadwal_matakuliah/edit/{jadwal_matakuliah}', 'Jadwal_matakuliahController@edit');
Route::post('jadwal_matakuliah/edit/{jadwal_matakuliah}', 'Jadwal_matakuliahController@update');
Route::get('jadwal_matakuliah/hapus/{jadwal_matakuliah}', 'Jadwal_matakuliahController@hapus');


Route::get('relasi/mahasiswa', function() {
    $mahasiswa = App\Pengguna::find(3)->mahasiswa;
     return "<li>$mahasiswa";
});
Route::get('relasi/pengguna', function() {
    $pengguna = App\Mahasiswa::find(5)->pengguna;
    return "<li>$pengguna";
});
Route::get('relasi/dosen', function() {
    $pengguna = App\Pengguna::find(1)->dosen;
    return "<li>$pengguna";
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