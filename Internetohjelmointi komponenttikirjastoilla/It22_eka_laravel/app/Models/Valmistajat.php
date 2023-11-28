<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valmistajat extends Model
{
    use HasFactory;
    protected $table = "valmistajat";

    protected $fillable = [
        'valmistaja',
        'maa',
    ];
}
