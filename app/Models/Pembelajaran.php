<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelajaran extends Model
{
    use HasFactory;

    protected $table = 'pembelajaran'; // Menentukan nama tabel

    protected $fillable = [
        'semester',
        'mata_kuliah',
        'materi',
        'sistem',
    ];
    public $timestamps = false;
}
