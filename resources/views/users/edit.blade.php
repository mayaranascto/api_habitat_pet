@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="panel panel-default">
    <div class="panel-heading">Edit User</div>
    <div class="panel-body">
      {{ Form::open(['url' => '/users/update', 'method' => 'post', 'class' => 'form-horizontal '])}}
        <div class="form-group">
          {{ Form::label('email', 'Email', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
            {{ Form::text('email', $user['email'], ['class' => 'form-control', 'placeholder' => 'Email']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('password', 'New Password', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'New Password']) }}
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Save changes', ['class' => 'btn btn-default']) }}
          </div>
        </div>
      </form>
    </div>
  </div>

</div>
@stop
