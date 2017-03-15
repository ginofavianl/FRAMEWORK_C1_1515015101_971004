<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_MataKuliah extends Model
{
    protected $table = 'jadwal_matakuliah' ;
    protected $fillable =['mahasiswa_id','ruangan','dosen_matakuliah_id','save'];
}
