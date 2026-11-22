<!DOCTYPE html>
<html>

<head>
    <title>User Accounts</title>
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

        <div class="page-header">
            <h1>User Accounts</h1>
            <a href="/users/create" class="btn btn-primary">
                Add New User
            </a>
        </div>

        <table border="1" cellpadding="10">
            <tr>
                <th>Username</th>
                <th>Full Name</th>
                <th>Avatar</th>
                <th>Actions</th>
            </tr>

            @foreach($users as $user)
            <tr>
                <td>{{ $user->username }}</td>
                <td>{{ $user->full_name }}</td>
                <td>

                    @if($user->avatar)

                    <img
                        src="{{ asset('storage/'.$user->avatar) }}"
                        width="80" class="avatar">

                    @else

                    <img
                        src="{{ asset('images/placeholder.png') }}"
                        width="80" class="avatar">

                    @endif

                </td>
                <td>
                    <a href="/users/edit/{{ $user->id }}" class="btn btn-edit">
                        Edit
                    </a>
                </td>
            </tr>
            @endforeach

        </table>

    </div>
</body>

</html>