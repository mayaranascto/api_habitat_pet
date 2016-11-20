@extends('layouts.app')

@section('content')
<div class="container">
  <div class="content-wrapper">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title" style="height: 30px;">Produtos
          <div class="pull-right">
              <div class="btn-group">
                  <a class="btn btn-sm btn-primary" href="{{ URL::to('/produtos/create') }}">Novo Produto</a>
              </div>
          </div>
        </h2>
      </div>
      <div class="panel-body">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Nome</th>
              <!-- <th>Referência</th> -->
              <th>Descrição</th>
              <th>Marca</th>
              <th>Modelo</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach($produtos as $produto)
              <tr>
                <td>{{ $produto->nome_produto }}</td>
                <!-- <td>{{ $produto->referencia }}</td> -->
                <td width="40%">{{ $produto->descricao_produto }}</td>
                <td>{{ $produto->marca }}</td>
                <td>{{ $produto->modelo }}</td>
                <td>
                  {{ Form::open(array('url' => 'produtos/' . $produto->id, 'method' => 'POST')) }}
                <a href="{{ URL::to('/produtos/' . $produto->id . '/edit') }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                  {{Form::hidden('_method', 'DELETE') }}
                  {{Form::button('<i class="fa fa-trash"></i>', array('type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => 'deleteFunc(event)' ))}}
                  {{ Form::close() }}
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <div class="text-center">
          {{ $produtos->links() }}
        </div>
      </div>
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
