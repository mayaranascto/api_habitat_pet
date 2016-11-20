@extends('layouts.app')

@section('content')
<div class="container">
  <div class="content-wrapper">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title" style="height: 30px;">Peixes
          <div class="pull-right">
            <div class="btn-group">
              <a class="btn btn-sm btn-primary" href="{{ URL::to('/plantas/create') }}">Nova Planta</a>
            </div>
          </div>
        </h2>
      </div>
      <div class="panel-body">
        <table class="table table-condensed">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Nome Cientifico</th>
              <th>Crescimento</th>
              <th>Plantio</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach($plantas as $planta)
              <tr>
                <td>{{ $planta->nome_planta }}</td>
                <td>{{ $planta->nome_planta_cientifico }}</td>
                <td>{{ $planta->crescimento }}</td>
                <td>{{ $planta->plantio }}</td>
                <td>
                  {{ Form::open(array('url' => 'plantas/' . $planta->id, 'method' => 'POST')) }}
                <a href="{{ URL::to('/plantas/' . $planta->id . '/edit') }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                  {{Form::hidden('_method', 'DELETE') }}
                  {{Form::button('<i class="fa fa-trash"></i>', array('type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => 'deleteFunc(event)' ))}}
                  {{ Form::close() }}
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <div class="text-center">
          {{ $plantas->links() }}
        </div>
      </p>
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
