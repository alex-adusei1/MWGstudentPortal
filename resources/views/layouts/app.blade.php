
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8" />
  <title>{{ config('app.name', 'MWG Academy') }}</title>
  <meta name="description" content="studentPortal is one stop solution that helps you manage your applications in an effective manner" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('assets/css/font.css')}}" type="text/css" cache="false" />
  <link rel="stylesheet" href="{{asset('assets/css/plugin.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('assets/css/app.css')}}" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/respond.min.js" cache="false"></script>
    <script src="js/ie/html5.js" cache="false"></script>
    <script src="js/ie/fix.js" cache="false"></script>
  <![endif]-->
</head>

<body id="app" style="background-image: url(assets/img-old/skol.jpg)">
    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="color:#fff; font-size:30px" href="{{ url('/') }}">{{ config('app.name', 'MWG Academy') }}</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                  <!-- Authentication Links -->
                        @if (Auth::guest())

													<!--condition to show {{ route('register') }} -->
<!--														 <li><a href="{{ route('register') }}">Register</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>-->
                        @else
                          <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif

                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

		<!-- footer -->
		<footer id="footer">
			<div class="text-center padder clearfix">
				<p>
					<small>Mobile first web app framework base on Bootstrap<br>&copy; 2013</small>
				</p>
			</div>
		</footer>
		<!-- / footer -->
		<script src="{{asset('assets/js/jquery.min.js')}}"></script>
		<!-- Bootstrap -->
		<script src="{{asset('assets/js/bootstrap.js')}}"></script>
		<!-- app -->
		<script src="{{asset('assets/js/app.js')}}"></script>
		<script src="{{asset('assets/js/app.plugin.js')}}"></script>
		<script src="{{asset('assets/js/app.data.js')}}"></script>
	</body>
	</html>

<!-- Localized -->
