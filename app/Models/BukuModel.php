<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class BukuModel extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'table_buku';

    protected $fillable = ['judul_buku', 'jenis_buku', 'tenggat_waktu'];
}
