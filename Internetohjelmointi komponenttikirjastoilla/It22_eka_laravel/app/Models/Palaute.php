<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Palaute extends Model
{
    use HasFactory;

    protected $table = "palaute";

    protected $fillable = [
        'asia',
        'email',
        'sisalto',
    ];
}
