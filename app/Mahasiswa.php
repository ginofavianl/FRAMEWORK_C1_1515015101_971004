<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Mahasiswa extends Model
{
    //
    protected $table = 'mahasiswa';
    protected $guarded = ['id'];
    protected $fillable = ['nama', 'nim', 'alamat'];
    public function pengguna() {
        return $this->belongsTo(Pengguna::class);
    }
    public function jadwalmatakuliah() {
        return $this->hasMany(Jadwal_matakuliah::class);
    }
}