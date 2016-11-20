@extends('layouts.app')

@section('content')
<div class="container">
  <div class="content-wrapper">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="pull-right">
            <div class="btn-group">
                <a class="btn btn-sm btn-primary" href="{{ URL::to('/users/create') }}">Novo Usuário</a>
            </div>
        </div>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>Email</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <td>{{$user->id}}</td>
              <td>{{$user->email}}</td>
              <td>
                {{ Form::open(array('url' => 'users/' . $user->id, 'method' => 'POST')) }}
              <a href="{{ URL::to('/users/' . $user->id . '/edit') }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                {{Form::hidden('_method', 'DELETE') }}
                {{Form::button('<i class="fa fa-trash"></i>', array('type' => 'submit', 'class' => 'btn btn-danger', 'onclick' => 'deleteFunc(event)' ))}}
                {{ Form::close() }}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="text-center">
          {{ $users->links() }}
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
