<!--MENU SECTION START-->
<div class="navbar navbar-inverse navbar-fixed-top scroll-me" id="menu-section" >
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand"  href="{{ url('/') }}">

  {{ config('app.name', 'Laravel') }}

</a>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
 @if (Auth::guest())
    <li><a href="{{ url('/login') }}">Login</a></li>
    <li><a href="{{ url('/register') }}">Register</a></li>
@else
       <li> <a href="#" >
            {{ Auth::user()->name }}
        </a></li>

            <li>
                <a href="{{ url('/admin/gifs') }}">
                    Admin
                </a>
            </li>
            <li>
                <a href="{{ url('/logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </li>
@endif
<!--<li><a href="#services">SERVICES</a></li>
<li><a href="#pricing">PRICING</a></li>
<li><a href="#work">WORK</a></li>
<li><a href="#team">TEAM</a></li>
<li><a href="#grid">GRID</a></li>
<li><a href="#contact">CONTACT</a></li>-->
</ul>
</div>

</div>
</div>
<!--MENU SECTION END-->