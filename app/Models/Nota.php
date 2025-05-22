<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nota extends Model
{
    use SoftDeletes;
    // Listagem de campos para inserção no banco
    protected $fillable = ['texto','titulo'];
}
