<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $table = 'produtos';
    public $timestamps = false;
    protected $fillable = ['nome_produto', 'referencia', 'descricao_produto', 'marca', 'modelo', 'status', 'foto_produto'];
}
