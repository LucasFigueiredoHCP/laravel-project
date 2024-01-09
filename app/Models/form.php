<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    protected $table = 'form';

    protected $fillable = [
        'nome',
        'sobrenome',
        'email',
        'lado_de_desenvolvimento_aplicacao',
        'senioridade',
        'tecnologias',
        'experiencia'
    ];
}
