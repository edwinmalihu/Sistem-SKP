<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pangkat extends Model
{
    use HasFactory;
    protected $table = 'pangkat_golongan';
    protected $primaryKey = 'id_pangkat_golongan';
    protected $fillable = [
        'jenis_pangkat_golongan',
    ];
}
