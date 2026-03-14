<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    use SoftDeletes; 

    protected $fillable = ['nim', 'nama', 'email', 'jenis_kelamin', 'jurusan', 'alamat'];
    protected $dates = ['deleted_at']; 
}
