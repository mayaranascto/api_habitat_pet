@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="pull-right">
          <div class="btn-group">
              <a class="btn btn-sm btn-primary" href="{{ URL::to('/produtos/create') }}">Novo Produto</a>
          </div>
      </div>
      <table class="table table-condensed">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Referência</th>
            <th>Descrição</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach($produtos as $produto)
            <tr>
              <td>{{ $produto->id }}</td>
              <td>{{ $produto->nome_produto }}</td>
              <td>{{ $produto->referencia }}</td>
              <td width="40%">{{ $produto->descricao_produto }}</td>
              <td>{{ $produto->marca }}</td>
              <td>{{ $produto->modelo }}</td>
              <td>
                {{ Form::open(array('url' => 'produtos/' . $produto->id, 'method' => 'POST')) }}
              <a href="{{ URL::to('/produtos/' . $produto->id . '/edit') }}" class="btn btn-default"><i class="fa fa-pencil"></i></a>
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

<script type="text/javascript">
  function deleteFunc(e) {
    if(!(confirm('Tem certeza que deseja fazer isso?'))) {
      e.preventDefault();
    }
  }
</script>
@endsection
