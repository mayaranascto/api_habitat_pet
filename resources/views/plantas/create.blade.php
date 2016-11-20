@extends('layouts.app')

@section('content')
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Nova Planta</div>
    <div class="panel-body">
      {{ Form::open(['url' => '/plantas', 'method' => 'post', 'class' => 'form-horizontal ', 'enctype' => 'multipart/form-data'])}}
        <div class="form-group">
          {{ Form::label('nome_planta', 'Nome da Planta', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
            {{ Form::text('nome_planta', '', ['class' => 'form-control', 'placeholder' => 'Nome da Planta']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('nome_planta_cientifico', 'Nome Cientifico', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
            {{ Form::text('nome_planta_cientifico', '', ['class' => 'form-control', 'placeholder' => 'Nome Cientifico']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('crescimento', 'Crescimento', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
          {{ Form::select('crescimento', ['Lento' => 'Lento', 'Médio' => 'Médio', 'Rápido' => 'Rápido'], null, ['class' => 'form-control', 'placeholder' => 'Escolha um tipo de Crescimento']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('plantio', 'Plantio', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
            {{ Form::select('plantio', ['Solitária' => 'Solitária', 'Grupo' => 'Grupo', 'Grupo/Solitária' => 'Grupo/Solitária'], null, ['class' => 'form-control', 'placeholder' => 'Escolha uma opção']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('posicao_aquario', 'Posição Aquario', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
            {{ Form::select('posicao_aquario', ['Meio' => 'Meio', 'Fundo' => 'Fundo', 'Meio/Fundo' => 'Meio/Fundo'], null, ['class' => 'form-control', 'placeholder' => 'Escolha uma opção']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('ph', 'PH', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
            {{ Form::text('ph', '', ['class' => 'form-control', 'placeholder' => 'PH']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('temperatura', 'Temperatura', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
            {{ Form::text('temperatura', '', ['class' => 'form-control', 'placeholder' => 'Temperatura']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('substrato_fertil', 'Substrato Fértil', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
          {{ Form::select('substrato_fertil', ['Sim' => 'Sim', 'Não' => 'Não'], null, ['class' => 'form-control', 'placeholder' => 'Escolha uma opção de Substrato Fértil']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('co2', 'CO2', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
          {{ Form::select('co2', ['Sim' => 'Sim', 'Não' => 'Não', 'Não necessário, mas recomendável' => 'Não necessário, mas recomendável'], null, ['class' => 'form-control', 'placeholder' => 'Escolha uma opção']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('suporta_emersao', 'Suporta Emersão', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
          {{ Form::select('suporta_emersao', ['Sim' => 'Sim', 'Não' => 'Não'], null, ['class' => 'form-control', 'placeholder' => 'Escolha uma opção']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('status', 'Status', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
          {{ Form::select('status', ['Dísponivel' => 'Dísponivel', 'Não Dísponivel' => 'Não Dísponivel'], null, ['class' => 'form-control', 'placeholder' => 'Escolha uma opção']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('foto_planta', 'Fota da Planta', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
          {{ Form::file('foto_planta', ['class' => 'form-control', 'placeholder' => 'Escolha um arquivo']) }}
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Salvar', ['class' => 'btn btn-default']) }}
          </div>
        </div>
      </form>
    </div>
  </div>

</div>
@stop
