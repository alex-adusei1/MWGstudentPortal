@extends('layouts.app')

@section('content')
<div class="wrapper wrapper-full-page">
    <div class="full-page login-page" data-color="" data-image="/assets/img/background/background-2.jpg">
    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                      <form method="POST" action="{{ route('login') }}">
                      {{ csrf_field() }}
                            <div class="card" data-background="color" data-color="blue">
                                <div class="card-header">
                                    <h3 class="card-title">Login</h3>
                                </div>
                                <div class="card-content">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email">Email address</label>
                                        <input type="email" placeholder="Enter email" class="form-control input-no-border" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" >Password</label>
                                        <input type="password" placeholder="Password" class="form-control input-no-border" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </div>
                                <div class="card-footer text-center">

<!--                                    <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                      </label>
                                    </div>-->

<button type="submit" class="btn btn-fill btn-wd">Login <i class="fa fa-gear"></i></button>
<!--                                    <div class="forgot">
                                        <a href="{{ route('password.request') }}">Forgot your password?</a>
                                    </div>-->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
