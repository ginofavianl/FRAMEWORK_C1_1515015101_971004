<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pengguna;

class PenggunaController extends Controller
{
public function awal()

	{
    return "Hello dari Pengguna Controller";
	}
public function tambah()
	{
		return $this->simpan();
	}
public function simpan()
	{
		$pengguna = new Pengguna();
		$pengguna->username = 'gino';
		$pengguna->password = 'leony';
		$pengguna->save();
		return "Data Dengan Username {$pengguna->username} telah  disimpan";
	}
}
