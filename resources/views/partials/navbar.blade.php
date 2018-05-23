@if (!Request::is('/') && !Request::is('projects*') && !Request::is('home') && !Request::is('login') )

    <nav class="navbar navbar-default navbar-fixed-top" style="opacity: 0.8;">
        <div class="container">

            <a class="navbar-brand" href="{{url('/')}}"><i class="fa fa-home" aria-hidden="true"></i></a>

            <ul class="nav navbar-nav pull-right">
                @guest
                    <li><a href="{{url('about')}}"><i class="fa fa-user" aria-hidden="true"></i> About</a></li>
                    <li><a href="{{url('development')}}"><i class="fa fa-terminal" aria-hidden="true"></i> Development</a></li>
                    <li><a href="{{url('community')}}"><i class="fa fa-users" aria-hidden="true"></i> Community</a></li>
                    <li><a href="{{url('weblog')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Weblog</a></li>
                @else

                @endguest
            </ul>

        </div>
    </nav>

@endif


{{-- <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            @if (!Request::is('/'))

                <a class="navbar-brand" href="{{url('/')}}"><i class="fa fa-home" aria-hidden="true"></i></a>

            @endif
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa fa-line-chart" aria-hidden="true"></i> Marketing</a></li>
                <li><a href="{{url('development')}}"><i class="fa fa-terminal" aria-hidden="true"></i> Development</a></li>
                <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> Community</a></li>
                <li><a href="{{url('weblog')}}"><i class="fa fa-user" aria-hidden="true"></i> About</a></li>
                <li><a href="{{url('weblog')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Weblog</a></li>
                @guest

                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{Auth::user()->name}} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="{{url('home')}}">Home</a></li>
                            <li><a href="{{url('projects')}}">Projects</a></li>
                            <li><a href="{{url('admin/weblog')}}">Weblogs</a></li>
                            <li><a href="{{url('admin/contacts')}}">Contacts</a></li>
                            <li>
                                <a href="{{route('logout')}}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                                    {{csrf_field()}}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav> --}}
