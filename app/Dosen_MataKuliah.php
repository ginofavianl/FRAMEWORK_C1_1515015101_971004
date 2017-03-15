<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_MataKuliah extends Model
{
    protected $table = 'dosen_matakuliah' ;
    protected $fillable =['username','matakuliah_id','save'];
}
