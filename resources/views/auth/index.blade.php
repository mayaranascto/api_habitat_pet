@extends('layouts.app')

@section('content')
<div class="container">
  <div class="content-wrapper">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title" style="height: 30px;">ADM Usuários
          <div class="pull-right">
            <div class="btn-group">
              <a class="btn btn-sm btn-primary" href="{{ URL::to('/register') }}">Novo ADM Usuário</a>
            </div>
          </div>
        </h2>
      </div>
      <div class="panel-body">
        <table class="table table-condensed">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
              <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <div class="text-center">

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
