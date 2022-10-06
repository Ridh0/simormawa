<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    use HasFactory;
    protected $table = 'disposisis';
    protected $fillable =
    [
        'perihal',
        'nosurat',
        'lampiran',
        'tanggal_kirim',
        'asal',
        'tujuan',
        'jenis',
        'users_id',
        'hal',
        'file',
        'subjek',
        'status',
    ];
    protected $casts = [
    ];
    

}
