<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}"><i class="fa fa-home" aria-hidden="true"></i></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="@if (Request::is('about')) active @endif"><a href="{{url('about')}}"><i class="fa fa-user" aria-hidden="true"></i> About</a></li>
                <li class="@if (Request::is('development')) active @endif"><a href="{{url('development')}}"><i class="fa fa-terminal" aria-hidden="true"></i> Development</a></li>
                <li class="@if (Request::is('community')) active @endif"><a href="{{url('community')}}"><i class="fa fa-users" aria-hidden="true"></i> Community</a></li>
            </ul>
        </div>
    </div>
</nav>
