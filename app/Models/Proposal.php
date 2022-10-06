<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'users_id',
        'noproposal',
        'judul',
        'asal',
        'jenis',
        'tanggal_kirim',
        'file',
        'status',
    ];
}
