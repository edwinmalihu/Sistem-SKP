<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiSKP extends Model
{
    use HasFactory;
    protected $table = 'skp_nilait';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_nt',
        'id_skp',
        'id_dinilai',
        'id_penilai',
        'periode',
        'tahun',
    ];
}
