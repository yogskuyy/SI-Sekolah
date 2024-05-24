<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    use HasFactory;
    protected $table = 'tb_mapel';
    protected $primaryKey = 'id_mapel';
    protected $guarded = ['id_mapel'];
}
