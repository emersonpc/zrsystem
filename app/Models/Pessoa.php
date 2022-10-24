<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $table = 'contas_bancarias';

    protected $guarded = []; //Permite gravar em todas colunas no banco
 
}
