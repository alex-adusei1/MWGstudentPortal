<nav class="navbar navbar-default">
        <div class="container-fluid">
    <div class="navbar-minimize">
      <button id="minimizeSidebar" class="btn btn-fill btn-icon"><i class="ti-more-alt"></i></button>
    </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a class="navbar-brand" href="#Dashboard">
        Overview
      </a>
            </div>
            <div class="collapse navbar-collapse">

      <form class="navbar-form navbar-left navbar-search-form" role="search">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" value="" class="form-control" placeholder="Search...">
          </div>
        </form>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#stats" class="dropdown-toggle btn-magnify" data-toggle="dropdown">
                            <i class="ti-panel"></i>
            <p>Stats</p>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#notifications" class="dropdown-toggle btn-rotate" data-toggle="dropdown">
                            <i class="ti-bell"></i>
                            <span class="notification">5</span>
                            <p class="hidden-md hidden-lg">
                              Notifications
                              <b class="caret"></b>
                            </p>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#not1">Notification 1</a></li>
                            <li><a href="#not2">Notification 2</a></li>
                            <li><a href="#not3">Notification 3</a></li>
                            <li><a href="#not4">Notification 4</a></li>
                            <li><a href="#another">Another notification</a></li>
                        </ul>
                    </li>

                  <!-- Authentication Links -->
              		@if (Auth::guest())
              				<li><a href="{{ route('login') }}">Login</a></li>
              				<li><a href="{{ route('register') }}">Register</a></li>
              		@else

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

              		@endif

                  <li class="dropdown ">
                    <a href="#settings" class="btn-rotate dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      <i class="ti-settings"></i>
                      <p class="hidden-md hidden-lg">
                          Settings <b class="caret"></b>
                      </p>
                    </a>

                    <ul class="dropdown-menu nav" role="menu">

                        <li><a href="#">Institution Profile</a></li>
                        <!-- <li><a href="#">Edit Institution</a></li> -->
                        <li><a href="#">Add Admin User</a></li>
                        <li><a href="#">Remove Admin</a></li>
                        <li><a href="#">Assign Role</a></li>
                    </ul>
                  </li>
                </ul>
            </div>
        </div>
    </nav>
