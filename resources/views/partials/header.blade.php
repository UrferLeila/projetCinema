<header>
    <nav class="navbar">
        <h1 class="h1">Le Palace</h1>

        <div class="navbar-actions">
            @guest
                <a href="{{ route('login') }}" class="btn btn-red">Login</a>
                <a href="{{ route('register') }}" class="btn btn-red">Register</a>
            @endguest

            @auth
                <div class="dropdown">
                    <button class="btn btn-red dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>

                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="dropdown-item text-danger" type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>



            @endauth
        </div>
    </nav>
</header>