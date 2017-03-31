<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Dosen_matakuliah extends Model
{
    //
    protected $table = 'dosen_matakuliah';
    protected $fillable = ['dosen_id', 'matakuliah_id'];
    public function Dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
    public function Matakuliah()
    {
        return $this->belongsTo(Matakuliah::class);
    }
    public function Jadwal_Matakuliah()
    {
        return $this->hasMany(Jadwal_Matakuliah::class);
    }
}