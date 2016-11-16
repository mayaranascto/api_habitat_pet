<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peixes extends Model
{
    protected $table = 'peixes';
    public $timestamps = false;
    protected $fillable = ['nome_peixe', 'nome_peixe_cientifico', 'descricao_peixe', 'alimentacao', 'ph', 'temperatura', 'tamanho', 'posicao_aquario', 'tipo', 'status', 'foto_peixe'];
}
