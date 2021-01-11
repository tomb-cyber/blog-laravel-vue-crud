<header class="container-fluid bg-dark-blue ">
    <div class="row" >
        <div class="col p-0">
            <div class="header-button-div">
                <side-nav></side-nav>
            </div>
        </div>

        <div class="col p-0">
            <h1 class="m-3" style="color:white;"> {{ $heading }}</h1>
        </div>

        <div class="col p-0">
                @auth
                <div class="account-button-div">
                    <div class="d-inline-block position-relative menu-helper">
                        <account-icon></account-icon>
                        <div class="dropdown-menu d-block">
                            <div class="dropdown-menu-item">
                                <a href="/home">My posts</a>
                            </div>
                            <div class="dropdown-menu-item">
                                <a href="/settings">My information</a>
                            </div>
                            <div class="dropdown-menu-item">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>              
                @else
                    @if (Route::currentRouteName() == 'login')
                        <div class="login-button-div">
                            <a class="login-button" href="{{ route('register') }}">Register</a>                           
                        </div>
                    @else
                        <div class="login-button-div">
                            <a class="login-button" href="{{ route('login') }}">Login</a>
                        </div>
                    @endif
                @endauth
        </div>
    </div>
</header>

