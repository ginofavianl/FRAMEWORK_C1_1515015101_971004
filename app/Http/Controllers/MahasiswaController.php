<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
   public function awal()
    {
        return "Hello kamu dari Mahasiswa Controller";
    }
    public function tambah()
    {
        return $this->simpan();
    }
    public function simpan()
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nama = 'Gino Favian Leonardo';
        $mahasiswa->nim = '1515015101';
        $mahasiswa->alamat = 'Jalan P. Suryanata Perum. Graha Indah';
        $mahasiswa->pengguna_id = 1;
        $mahasiswa->save();
        return "Data dengan nama mahasiswa {$mahasiswa->nama} telah disimpan";
    }
}