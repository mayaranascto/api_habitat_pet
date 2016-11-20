@extends('layouts.app')

@section('content')
<div class="container">
  <div class="login-box">
    <div class="login-logo">
      <img src="imgs/logo.png" style="width: 250px; height: 150px;" alt="" />
    </div>
    <div class="login-box-body">
      <p class="login-box-msg">Logue-se para iniciar uma sessão</p>
        <form role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <!-- <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback"> -->
                <!-- <label for="email" class="col-md-4 control-label">E-Mail Address</label> -->
                @if ($errors->has('email'))
                    <span class="help-block text-center">
                        <strong class="text-red">{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <div class="form-group has-feedback">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                </div>
            <!-- </div> -->

            <!-- <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback"> -->
                <!-- <label for="password" class="col-md-4 control-label">Password</label> -->

                <div class="form-group has-feedback">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            <!-- </div> -->
            <div class="row">
              <div class="col-xs-8">
                <label>
                  <input type="checkbox"  name="remember"> Remember Me
                </label>
              </div>
              <!-- /.col -->
              <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
              </div>
              <!-- /.col -->

              <a class="btn btn-link" href="{{ url('/password/reset') }}">
                  Forgot Your Password?
              </a>
            </div>
        </form>
    </div>
  </div>
</div>
@endsection
