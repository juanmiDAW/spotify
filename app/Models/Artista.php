<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artista extends Model
{
    /** @use HasFactory<\Database\Factories\ArtistaFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['nombre'];

    public function albumes()
    {
        return $this->belongsToMany(Album::class, 'album_artista');
    }
}
