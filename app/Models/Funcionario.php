<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = ['id', 'nome', 'cargo', 'departamento', 'salario' ];
}
