@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="pull-right">
        <div class="btn-group">
          <a class="btn btn-sm btn-primary" href="{{ URL::to('/peixes/create') }}">Novo Peixe</a>
        </div>
      </div>
      <table class="table table-condensed">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Nome Cientifico</th>
            <th>Descrição</th>
            <th>Tipo</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach($peixes as $peixe)
            <tr>
              <td>{{ $peixe->id }}</td>
              <td>{{ $peixe->nome_peixe }}</td>
              <td>{{ $peixe->nome_peixe_cientifico }}</td>
              <td width="50%">{{ $peixe->descricao_peixe }}</td>
              <td>{{ $peixe->tipo }}</td>
              <td>
                {{ Form::open(array('url' => 'peixes/' . $peixe->id, 'method' => 'POST')) }}
              <a href="{{ URL::to('/peixes/' . $peixe->id . '/edit') }}" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                {{Form::hidden('_method', 'DELETE') }}
                {{Form::button('<i class="fa fa-trash"></i>', array('type' => 'submit', 'class' => 'btn btn-default', 'onclick' => 'deleteFunc(event)' ))}}
                {{ Form::close() }}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@stop
