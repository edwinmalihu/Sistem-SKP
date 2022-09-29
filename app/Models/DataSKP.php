<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSKP extends Model
{
    use HasFactory;
    protected $table = 'data_skp';
    protected $primaryKey = 'id_data_skp';
    protected $fillable = [
        'id_dinilai',
        'nip_dinilai',
        'id_godi',
        'id_jadi',
        'id_udi',
        'id_penilai',
        'nip_penilai',
        'id_gope',
        'id_jape',
        'id_upe',
        'id_app',
        'nip_app',
        'id_gpp',
        'id_jpp',
        'id_upp',
        'semester',
        'tahun',
    ];
}
