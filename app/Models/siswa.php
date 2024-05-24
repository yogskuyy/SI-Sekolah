<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'tb_siswa';
    protected $primaryKey = 'id_siswa';
    protected $guarded = ['id_siswa'];
    public function kelas(){
        return $this->belongsTo(Kelas::class,'id_kelas');
    }
    public function ekstra(){
        return $this->belongsTo(Ekstrakurikuler::class,'id_ekstrakurikuler');
    }
}
