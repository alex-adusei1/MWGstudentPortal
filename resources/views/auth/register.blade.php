@extends('layouts.app')

@section('content')
<div class="wrapper wrapper-full-page">
    <div class="full-page login-page" data-color="orange" data-image="/assets/img/background/background-2.jpg">
    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                      <form method="POST" action="{{ route('register') }}">
                      {{ csrf_field() }}
                            <div class="card" data-background="color" data-color="blue">
                                <div class="card-header">
                                    <h3 class="card-title">Register</h3>
                                </div>
                                <div class="card-content">
                                  <!-- name field -->
                                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                      <label for="name">Name</label>
                                      <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                      @if ($errors->has('name'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('name') }}</strong>
                                          </span>
                                      @endif

                                  </div>
                                    <!-- email field -->
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email">Email address</label>
                                        <input id="email" type="email" placeholder="Enter email" class="form-control input-no-border" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <!-- password field -->
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" >Password</label>
                                        <input id="password" type="password" placeholder="Password" class="form-control input-no-border" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif

                                    </div>

                                    <!-- confirm password field -->
                                    <div class="form-group">

                                        <label for="password-confirm">Confirm Password</label>
                                        <input id="password-confirm" type="password" class="form-control input-no-border" name="password_confirmation" required>

                                    </div>
                                </div>


                                <div class="card-footer text-center">

                                    <button type="submit" class="btn btn-fill btn-wd ">Register</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
