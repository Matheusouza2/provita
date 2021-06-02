<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword;
use App\Notifications\ResetPassword;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'usuarios';

    protected $fillable = [
        'nome',
        'cpf',
        'nascimento',
        'password',
        'nivel',
        'rg',
        'cep',
        'logradouro',
        'bairro',
        'numero',
        'cidade',
        'uf',
        'email',
        'sexo',
        'diabetico',
        'hipertensao',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    public function sendPasswordResetNotification($token)
    {
    // Não esquece: use App\Notifications\ResetPassword;
    $this->notify(new ResetPassword($token));
    }
}
