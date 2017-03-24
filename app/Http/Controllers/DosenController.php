<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
{
     public function awal()
    {
    	return "Hello kamu dari Dosen Controller";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen = new Dosen();
    	$dosen->nama = 'Gino Favian Leonardo';
    	$dosen->nip = '1515015101';
    	$dosen->alamat = 'Jalan P. Suryanata';
    	$dosen->pengguna_id = 1;
    	$dosen->save();
    	return "Data dengan nama dosen {$dosen->nama} telah disimpan";
    }
}
