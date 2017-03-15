<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Matakuliah;

class MatakuliahController extends Controller
{
     public function awal()
    {
    	return "Hello kamu dari Matakuliah Controller";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$matakuliah = new Matakuliah();
    	$matakuliah->title = "Sistem Operasi";
    	$matakuliah->keterangan = "Wajib";
    	$matakuliah->save();
    	return "Data dengan nama matakuliah {$matakuliah->title} telah disimpan";
    }
}