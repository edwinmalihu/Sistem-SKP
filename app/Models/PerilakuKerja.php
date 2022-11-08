<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerilakuKerja extends Model
{
    use HasFactory;
    protected $table = 'perilaku_kerja';
    protected $primaryKey = 'id';
    protected $guarded = [
        'id',
    ];
}
