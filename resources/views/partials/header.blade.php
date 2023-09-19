<div class="container pt-4 pb-4">
    <div class="row align-items-center">
        <div class="logo col-8">
            <a href="/">
                <h1>
                    LOGO
                </h1>
            </a>
        </div>
        <div class="nav-links col-4">
        <ul class="d-flex">
            @auth
                <li>
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <a href="#">Link 2</a>
                </li>
                <li>
                    <a href="#">Link 3</a>
                </li>
            @else
                <li>
                    <a href="{{ route('login') }}">Login</a>
                </li>
                <li>
                    <a href="{{ route('register') }}">Register</a>
                </li>
            @endauth
        </ul>

        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="btn btn-outline-danger">
                    Log Out
                </button>
            </form>
        @endauth
        </div>
    </div>
    
</div>