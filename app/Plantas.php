<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plantas extends Model
{
    protected $table = 'plantas';
    public $timestamps = false;
    protected $fillable = ['nome_planta', 'nome_planta_cientifico', 'crescimento', 'plantio', 'posicao_aquario', 'ph', 'temperatura', 'tamanho', 'substrato_fertil', 'co2', 'suporta_emersao', 'status', 'foto_planta'];
}
