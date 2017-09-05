@extends('layouts.app')

@section('content')
      <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
        {{-- <a class="nav-brand" style="color:#000; font-size:30px" href="index.html">{{config('app.name')}}</a> --}}
        <div class="row m-n">
          <div class="col-md-4 col-md-offset-4 m-t-lg">
            <section class="panel">
              <header class="panel-heading text-center">
                Sign in
              </header>
              <form action="{{ route('login') }}" class="panel-body" method="POST">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label class="control-label">Email</label>
                  <input type="email" placeholder="test@example.com" class="form-control" name="email">
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label class="control-label">Password</label>
                  <input type="password" id="inputPassword" placeholder="Password" name="password" class="form-control">
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>
                {{-- <div class="checkbox">
                  <label>
                    <input type="checkbox"> Keep me logged in
                  </label>
                </div> --}}
                {{-- <a href="#" class="pull-right m-t-xs"><small>Forgot password?</small></a> --}}
                <button type="submit" class="btn btn-info form-control">SignIN</button>
                <div class="line line-dashed"></div>
              </form>
            </section>
          </div>
        </div>
      </section>
@endsection
