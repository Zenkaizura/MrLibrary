<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class NovelModel extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'buku_novel';

    protected $fillable = ['penulis', 'daftar_isi', 'daftar_pustaka'];
}