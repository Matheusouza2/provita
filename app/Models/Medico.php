<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    protected $table = 'medicos';

    protected $fillable = [
        'uf_crm',
        'crm',
        'especializacao',
        'nome',
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'uf',
        'contato',
        'password'
    ];
}
