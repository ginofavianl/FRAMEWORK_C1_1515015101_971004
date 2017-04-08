<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_matakuliah extends Model
{
    //
    protected $table = 'jadwal_matakuliah';
    protected $fillable = ['mahasiswa_id', 'ruangan_id', 'dosen_matakuliah_id'];
    protected $guarded = 'id';

    public function Mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
    
    public function Ruangan()
    {
        return $this->belongsTo(Ruangan::class, 'ruangan_id');
    }

    public function Dosen_Matakuliah()
    {
        return $this->belongsTo(Dosen_Matakuliah::class, 'dosen_matakuliah_id');
    }
    
     public function getTitlematakuliahAttribute(){
        return $this->matakuliah->title;
    }
    public function listDosenDanMatakuliah()
    {
        $out = [];
        foreach ($this->all() as $dsnMtk) {
            $out[$dsnMtk->id] = "{$dsnMtk->dosen->nama} {$dsnMtk->dosen->nip} (Matakuliah {$dsnMtk->matakuliah->title})";
        }
        return $out;
    }

}
