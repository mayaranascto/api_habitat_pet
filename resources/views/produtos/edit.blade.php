@extends('layouts.app')

@section('content')
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Nova Planta</div>
    <div class="panel-body">
      {{ Form::open(['url' => '/produtos/'.$produto['id'], 'method' => 'put', 'class' => 'form-horizontal ', 'enctype' => 'multipart/form-data'])}}
        <div class="form-group">
          {{ Form::label('nome_produto', 'Nome do Produto', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
            {{ Form::text('nome_produto', $produto['nome_produto'], ['class' => 'form-control', 'placeholder' => 'Nome do Produto']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('referencia', 'Referência', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
            {{ Form::text('referencia', $produto->referencia, ['class' => 'form-control', 'placeholder' => 'Referência']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('descricao_produto', 'Descrição', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
            {{ Form::textarea('descricao_produto', $produto->descricao_produto, ['class' => 'form-control', 'placeholder' => 'Descrição', 'rows' => '5']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('marca', 'Marca', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
            {{ Form::text('marca', $produto->marca, ['class' => 'form-control', 'placeholder' => 'Marca']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('modelo', 'Modelo', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
            {{ Form::text('modelo', $produto['modelo'], ['class' => 'form-control', 'placeholder' => 'Modelo']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('status', 'Status', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
          {{ Form::select('status', ['Dísponivel' => 'Dísponivel', 'Não Dísponivel' => 'Não Dísponivel'], $produto->status, ['class' => 'form-control', 'placeholder' => 'Escolha uma opção']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('foto_produto', 'Foto do Produto', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
          {{ Form::file('foto_produto', ['class' => 'form-control', 'placeholder' => 'Escolha um arquivo']) }}
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
