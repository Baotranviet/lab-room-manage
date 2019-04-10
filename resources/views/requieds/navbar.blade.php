        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        @if(Auth::check())
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        {{ Auth::user()->name }}
                                        <b class="caret"></b>
                                    </p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ URL::route('logout') }}">Log Out</a></li>
                              </ul>
                        </li>
                        @else
                            <li>
                                <a href="{{ URL::route('register') }}">
                                    <p>Register</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ URL::route('login') }}">
                                    <p>Login</p>
                                </a>
                            </li>
                        @endif
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>