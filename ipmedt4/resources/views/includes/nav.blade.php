    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="container" style="margin-left: 0">
                <div class="navbar-header">
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name') }}
                    </a>
                </div>
            </div>

        <div class="navbar" style="margin-bottom: 0" id="app-navbar-collapse">

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav">
                <!-- Authentication Links -->
                @if(Auth::guest())
                    <li><a style="padding-right: 50px" href="{{ route('login') }}">Uitloggen</a></li>
                @else
                    <li style="display: flex">
                        <a style="padding-right: 50px">
                            {{ Auth::user()->name }}
                        </a>
                        <a style="padding-right: 50px" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</div>

