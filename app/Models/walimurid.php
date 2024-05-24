<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class walimurid extends Model
{
    use HasFactory;
    protected $table = 'tb_walimurid';
    protected $primaryKey = 'id_walimurid';
    protected $guarded = ['id_walimurid'];
    public function siswa(){
        return $this->belongsTo(Siswa::class,'id_siswa');
    }
}
