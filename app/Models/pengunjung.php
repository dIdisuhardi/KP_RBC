<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengunjung extends Model
{
    use HasFactory;

    protected $table = "pengunjung";
    protected $fillable = ['nama', 'nim', 'angkatan', 'keperluan', 'waktu_post'];
}
