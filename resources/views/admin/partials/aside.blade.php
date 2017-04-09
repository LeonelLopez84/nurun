<div class="side-menu">

 <nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <div class="brand-wrapper">
            <!-- Hamburger -->
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Brand -->
            <div class="brand-name-wrapper">
                <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
            </div>

        </div>

    </div>

    <!-- Main Menu -->
    <div class="side-menu-container">
        <ul class="nav navbar-nav">

            <li class="active"><a href="{{url('/')}}" target="_blank">&nbsp;&nbsp;<span class="fa fa-home"></span> Home</a></li>
            @if (Auth::guest())
                     <li><a href="{{ url('/login') }}">Login</a></li>
            @else
                <li class="panel panel-default" id="dropdown">
                    <a data-toggle="collapse" href="#dropdown-2">
                        &nbsp;&nbsp;<i class="fa fa-user"></i>&nbsp; {{ Auth::user()->name }}  <span class="caret"></span>
                    </a>

                    <!-- Dropdown level 1 -->
                    <div id="dropdown-2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                       <i class="fa fa-power-off" aria-hidden="true"></i> Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                           </ul>
                        </div>
                    </div>
                </li>
            @endif
       </ul>
    </div><!-- /.navbar-collapse -->
</nav>
</div>