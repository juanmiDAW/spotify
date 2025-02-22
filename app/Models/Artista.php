<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    /** @use HasFactory<\Database\Factories\ArtistaFactory> */
    use HasFactory;

    protected $fillable = ['nombre'];

    public function albumes()
    {
        return $this->belongsToMany(Album::class, 'album_artista');
    }
}
