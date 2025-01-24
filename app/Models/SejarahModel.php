<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class SejarahModel extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'buku_sejarah';

    protected $fillable = ['penulis', 'tokoh', 'waktu'];
}