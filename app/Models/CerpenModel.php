<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class CerpenModel extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'buku_cerpen';

    protected $fillable = ['penulis', 'daftar_isi', 'daftar_pustaka'];
}