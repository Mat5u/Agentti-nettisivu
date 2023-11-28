<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuote extends Model
{
    use HasFactory;
    protected $table = "tuote";

    protected $fillable = [
        'nimi',
        'valmistajat',
        'kuvaus',
        'hinta',
        'kpl',
        'lahetettavissa',
        'arvioitulahetysaika',
        'kuvaid',
    ];

}
