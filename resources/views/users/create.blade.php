<!DOCTYPE html>
<html>

<head>
    <title>Customer Accounts</title>
    <link rel="stylesheet" href="/css/style.css">
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

        <h1>User Form</h1>
        <?php if (isset($validation)): ?>

            <div class="validation-errors">
                <?= $validation->listErrors() ?>
            </div>

        <?php endif; ?>
        <form method="POST"
            action="{{ route('users.update',$user) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Username</label>
                <input
                    type="text"
                    name="username">
            </div>

            <div class="form-group">
                <label>Full Name</label>
                <input
                    type="text"
                    name="full_name">
            </div>

            <div class="form-group">
                <label>Avatar</label>
                <input
                    type="file"
                    name="avatar">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">
                    Save
                </button>
                <a href="/users" class="btn btn-edit">
                    Cancel
                </a>
            </div>

        </form>

    </div>
</body>

</html>