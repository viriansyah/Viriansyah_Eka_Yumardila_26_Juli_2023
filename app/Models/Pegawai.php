<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $fillable=['name', 'jabatan', 'alamat', 'no_telp'];
    protected $table='pegawai';
    public $timestamps=false;
}
