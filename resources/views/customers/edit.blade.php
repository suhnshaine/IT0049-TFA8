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
        </nav>

        <h1>Customer Form</h1>
        <?php if (isset($validation)): ?>

            <div class="validation-errors">
                <?= $validation->listErrors() ?>
            </div>

        <?php endif; ?>
        <form method="POST"
            action="{{ route('customers.update',$customer) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Full Name</label>
                <input
                    type="text"
                    name="full_name"
                    value="{{ $customer->full_name }}">

                <br><br>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input
                    type="email"
                    name="email"
                    value="{{ $customer->email }}">

                <br><br>
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input
                    type="text"
                    name="phone"
                    value="{{ $customer->phone }}">

                <br><br>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="/customers" class="btn btn-edit">
                    Cancel
                </a>
            </div>

        </form>

    </div>
</body>

</html>