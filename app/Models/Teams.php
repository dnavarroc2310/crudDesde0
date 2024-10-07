<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    use HasFactory;

    protected $table = 'teamsEuropa';
    protected $fillable = [
        'nombre',
        'Fundacion',
        'City',
        'pais',
        'estadio',
        'ligasGanadas',
        'copasGanadasLocales',
        'championsGanadas',
    ];
}
