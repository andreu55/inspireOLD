@extends('layouts.app')

@section('content')
<header>
  <div class="header-content">
    <div class="inner">
      <div class="row justify-content-md-center">
        <div class="col-md-8">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h1>Login to Inspire</h1>
              <a href="{{ url('register') }}" class="auth-link">New? Sign up!</a>
            </div>
            <br>
            <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row justify-content-md-center">
                            <label for="email" class="col-4 col-form-label">E-Mail Address</label>
                            <div class="col-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} row justify-content-md-center">
                            <label for="password" class="col-4 col-form-label">Password</label>

                            <div class="col-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-5 offset-md-7">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" checked> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row justify-content-md-center">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</header>
@endsection
