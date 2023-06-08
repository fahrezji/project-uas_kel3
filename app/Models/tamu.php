<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tamu extends Model
{
    use HasFactory;
    protected $table = "tamu";
    protected $fillable=
    [
    'nama_tamu',
    'alamat',
    'email',
    'telepon',
    'tujuan',
    'tanggal'


    ];
}
