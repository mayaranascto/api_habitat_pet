@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="panel panel-default">
    <div class="panel-heading">New User</div>
    <div class="panel-body">
      {{ Form::open(['url' => '/users', 'method' => 'post', 'class' => 'form-horizontal '])}}
        <div class="form-group">
          {{ Form::label('email', 'Email', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
            {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email']) }}
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('password', 'Password', ['class' => 'col-md-2 control-label'])}}
          <div class="col-md-10">
            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Save', ['class' => 'btn btn-default']) }}
          </div>
        </div>
      </form>
    </div>
  </div>

</div>
@stop
