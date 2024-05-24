<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;
    protected $table = 'tb_jadwalpelajaran';
    protected $primaryKey = 'id_jadwal';
    protected $guarded = ['id_jadwal'];
}
