<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PessoaTelefone extends Model
{
    use HasFactory;

    protected $table = 'pessoas_telefones';

    protected $guarded = []; //Permite gravar em todas colunas no banco
 
}
