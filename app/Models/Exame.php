<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exame extends Model
{
    use HasFactory;

    protected $table = 'exame';

    protected $fillable = [
        'nome',
        'apelido',
        'paciente',
        'laboratorio',
        'data'
    ];
}
