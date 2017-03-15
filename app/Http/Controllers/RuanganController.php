<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ruangan;

class RuanganController extends Controller
{
    public function awal()
    {
        return "Hello kamu dari Ruangan Controller";
    }
    public function tambah()
    {
        return $this->simpan();
    }
    public function simpan()
    {
        $ruangan = new Ruangan();
        $ruangan->title = 'Ruang Lab. SE';
        $ruangan->save();
        return "Data dengan nama ruangan {$ruangan->title} telah disimpan";
    }
}