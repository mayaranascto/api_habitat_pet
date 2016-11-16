@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="panel panel-default">
    <div class="panel-heading">Nova Planta</div>
    <div class="panel-body">
      {{ Form::open(['url' => '/peixes/'.$peixe['id'], 'method' => 'put', 'class' => 'form-horizontal ', 'enctype' => 'multipart/form-data'])}}
        <div class="form-group">
          {{ Form::label('nome_peixe', 'Nome do Peixe', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
            {{ Form::text('nome_peixe', $peixe['nome_peixe'], ['class' => 'form-control', 'placeholder' => 'Nome do Peixe']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('nome_peixe_cientifico', 'Nome Cientifico', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
            {{ Form::text('nome_peixe_cientifico', $peixe['nome_peixe_cientifico'], ['class' => 'form-control', 'placeholder' => 'Nome Cientifico']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('descricao_peixe', 'Descrição', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
            {{ Form::textarea('descricao_peixe', $peixe['descricao_peixe'], ['class' => 'form-control', 'placeholder' => 'Descrição', 'rows' => '5']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('alimentacao', 'Alimentação', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
            {{ Form::textarea('alimentacao', $peixe['alimentacao'], ['class' => 'form-control', 'placeholder' => 'Alimentação', 'rows' => '5']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('ph', 'PH', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
            {{ Form::text('ph', $peixe['ph'], ['class' => 'form-control', 'placeholder' => 'PH']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('temperatura', 'Temperatura', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
            {{ Form::text('temperatura', $peixe['temperatura'], ['class' => 'form-control', 'placeholder' => 'Temperatura']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('tamanho', 'Tamanho', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
            {{ Form::text('tamanho', $peixe['tamanho'], ['class' => 'form-control', 'placeholder' => 'Tamanho']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('posicao_aquario', 'Pocisão do Aquário', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
          {{ Form::select('posicao_aquario', ['Todo o Aquário' => 'Todo o Aquário', 'Meio do Aquário' => 'Meio do Aquário', 'Fundo do Aquário' => 'Fundo do Aquário'], $peixe['posicao_aquario'], ['class' => 'form-control', 'placeholder' => 'Escolha uma opção']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('tipo', 'Tipo', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
          {{ Form::select('tipo', ['Peixe de Água Doce' => 'Peixe de Água Doce', 'Peixe de Água Salgada' => 'Peixe de Água Salgada'], $peixe['tipo'], ['class' => 'form-control', 'placeholder' => 'Escolha uma opção']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('status', 'Status', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
          {{ Form::select('status', ['Dísponivel' => 'Dísponivel', 'Não Dísponivel' => 'Não Dísponivel'], $peixe['status'], ['class' => 'form-control', 'placeholder' => 'Escolha uma opção']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('foto_peixe', 'Foto do Peixe', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
          {{ Form::file('foto_peixe', ['class' => 'form-control', 'placeholder' => 'Escolha um arquivo']) }}
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Salvar Alterações', ['class' => 'btn btn-default']) }}
          </div>
        </div>
      </form>
    </div>
  </div>

</div>
@stop
