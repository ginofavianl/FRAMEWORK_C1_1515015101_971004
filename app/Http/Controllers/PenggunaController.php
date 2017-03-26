<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pengguna;

class PenggunaController extends Controller
{
public function awal()

	{
    return view('pengguna.awal',['data'=>Pengguna::all()]);
	}
public function tambah()
	{
		return view('pengguna.tambah');
	}
public function simpan(Request $input)
	{
		$pengguna = new Pengguna();
		$pengguna->username = 'gino';
		$pengguna->password = 'leony';
		$pengguna->save();
		return "Data Dengan Username {$pengguna->username} telah  disimpan";
	}
public function edit($id)
	{
		$pengguna = Pengguna::find($id);
		return view('pengguna.edit')->with(array('pengguna'=>$pengguna));
	}
public function lihat($id)
	{
		$pengguna = Pengguna::find($id);
		return view('pengguna.lihat')->with(array('pengguna'=>$pengguna));
	}
public function update($id, Request $input)
	{
		$pengguna = Pengguna::find($id);
		$pengguna->username = $input->username;
		$pengguna->password = $input->password;
		$informasi = $pengguna->save() ? 'Berhasil Update Data' : 'Gagal Update Data';
		return redirect('pengguna')->with(['informasi'=>$informasi]);
	}
public function hapus($id)
	{
		$pengguna = Pengguna::find($id);
		$informasi = $pengguna->delete() ? 'Berhasil Hapus Data' : 'Gagal Hapus Data';
		return redirect('pengguna')->with(['infomarsi'=>$informasi]);
	}
}
