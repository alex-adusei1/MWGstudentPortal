@extends('layouts.app')

@section('content')
<div class="wrapper wrapper-full-page">
    <div class="full-page login-page" data-color="" data-image="/assets/img/background/background-2.jpg">
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
                                      <div class="input-group m-b-sm">
                                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                                    <input type="text" class="form-control" name="name" placeholder="Full Name" aria-describedby="basic-addon1" value="{{ old('name')}}" required autofocus>
                                                </div>

                                      @if ($errors->has('name'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('name') }}</strong>
                                          </span>
                                      @endif

                                  </div>
                                    <!-- email field -->
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <div class="input-group m-b-sm">
                                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                                    <input type="email" class="form-control" name="email" placeholder="Email" aria-describedby="basic-addon1" value="{{ old('email')}}" required>
                                                </div>
                                        
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <!-- password field -->
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <div class="input-group m-b-sm">
                                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock"></i></span>
                                                    <input type="password" class="form-control" name="password" placeholder="Password" aria-describedby="basic-addon1" value="{{ old('password')}}" required>
                                        </div>
                                        
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif

                                    </div>

                                    <!-- confirm password field -->
                                    <div class="form-group">

                                        <div class="input-group m-b-sm">
                                            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock"></i></span>
                                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" aria-describedby="basic-addon1" required>
                                                </div>
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
