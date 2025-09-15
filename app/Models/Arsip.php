<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    protected $table = 'arsip';
    
    protected $fillable = [
        'nomor_surat',
        'kategori', 
        'judul',
        'file_path',
        'waktu_pengarsipan'
    ];

    protected $casts = [
        'waktu_pengarsipan' => 'datetime'
    ];
}
