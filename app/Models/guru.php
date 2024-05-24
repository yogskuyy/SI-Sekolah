<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    use HasFactory;
    protected $table = 'tb_guru';
    protected $primaryKey = 'id_guru';
    protected $guarded = ['id_guru'];
}
