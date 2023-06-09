<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;
    protected $table = 'anime';
    protected $fillable = [
        'title',
        'image',
        'sinopsis',
        'genre',
        'studio',
        'year',
    ];
}
