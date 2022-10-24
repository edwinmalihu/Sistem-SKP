<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiRealisasi extends Model
{
    use HasFactory;
    protected $table = 'nilai_realisasi';
    protected $primaryKey = 'id_nr';
    protected $guarded = [
        'id_nr',
    ];
}
