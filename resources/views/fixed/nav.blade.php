<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="images/logo.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-rs-food">
                <ul class="navbar-nav ml-auto">
                    @foreach($nav as $link)
                        <li class="nav-item @if(request()->routeIs($link->route)) active @endif">
                            <a class="nav-link" href="{{ route($link->route) }}">{{ $link->nameNav }}</a>
                        </li>
                    @endforeach
                    @if(!Session::has('user'))
                        <li class="nav-item @if(request()->routeIs('registration')) active @endif">
                            <a class="nav-link" href="{{ route('registration') }}">Registration</a>
                        </li>
                    @endif
                    @if(Session::get('user'))
                        @if(Session::get('user')->idRole == 2)
                                <li class="nav-item @if(request()->routeIs('menus')) active @endif">
                                    <a class="nav-link" href="{{ route('menus') }}">MenuDB</a>
                                </li>
                                <li class="nav-item @if(request()->routeIs('users')) active @endif">
                                    <a class="nav-link" href="{{ route('users') }}">UserDB</a>
                                </li>
                        @endif
                        <li class="nav-item @if(request()->routeIs($link->route)) active @endif">
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <button class="nav-link btn">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item @if(request()->routeIs('login')) active @endif">
                            <a class="nav-link " href="{{ route('login') }}">Login</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
