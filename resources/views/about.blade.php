<!DOCTYPE html>
<html>

<head>
    <title>About</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="container">

        <h1>POS System</h1>

        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/customers">Customers</a>
            <a href="/users">Users</a>
            @auth

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="btn btn-edit">
                    Logout
                </button>
            </form>

            @endauth
            @guest

            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>

            <a href="{{ route('register') }}" class="btn btn-edit">Register</a>

            @endguest
        </nav>

        <h1>About</h1>
        <p>This is a basic Point-of-Sale system built using Laravel.</p>

    </div>
</body>

</html>