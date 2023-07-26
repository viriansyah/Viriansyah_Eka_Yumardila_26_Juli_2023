<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    use HasFactory;
    protected $fillable=['fullname', 'ttl', 'umur', 'alamat', 'agama'];
    protected $table='form_data';
    public $timestamps=false;
}
