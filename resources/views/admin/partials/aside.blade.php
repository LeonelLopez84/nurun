<div class="side-menu">

 <nav class="navbar" role="navigation">
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
            @if (Auth::guest())
                     <li><a href="{{ url('/login') }}" >Login</a></li>
            @else
            <li ><a href="{{ url('/') }}" target="_blank" ><i class="fa fa-home"></i> Ir al Home</a></li>
            <li><a href="{{url('/admin/gifs')}}"><span class="fa fa-list"></span> &nbsp;Lista Gifs</a></li>
                
            <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-lvl1"> <i class="fa fa-user" ></i>
                    &nbsp; {{ Auth::user()->name }}<span class="caret"></span>
                </a>
                <!-- Dropdown level 1 -->            
                <div id="dropdown-lvl1" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="{{ url('/register') }}">
                                    &nbsp; <i class="fa fa-user" ></i>
                                    &nbsp; Registrar Usuario
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off" aria-hidden="true"></i>
                                    &nbsp; Logout
                                </a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
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