<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstrakurikuler extends Model
{
    use HasFactory;
    protected $table = 'tb_ekstrakurikuler';
    protected $primaryKey = 'id_ekstrakurikuler';
    protected $guarded = ['id_ekstrakurikuler'];
}
