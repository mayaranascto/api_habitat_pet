@extends('layouts.app')

@section('script')

@stop

@section('content')
<div class="container-fluid">
  <div class="panel panel-default">
    <div class="pull-right">
        <div class="btn-group">
            <a class="btn btn-sm btn-primary" href="{{ URL::to('/users/create') }}">New User</a>
        </div>
    </div>
    <div class="panel-body">
      <table class="table table-condensed">
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
            <a href="{{ URL::to('/users/' . $user->id . '/edit') }}" class="btn btn-default"><i class="fa fa-pencil"></i></a>
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
