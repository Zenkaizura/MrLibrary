<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class MapelModel extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'buku_pelajaran';

    protected $fillable = ['penulis', 'jenis_mapel', 'daftar_isi','daftar_pustaka'];
}