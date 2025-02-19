<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container">
        <div class="d-flex">
            <form action="{{ route('login') }}" method="POST" class="form">
                <div class="form-title">Login</div>
                @csrf
                <label for="username">Username</label><br>
                <input type="text" id="username" name="username" required> <br>

                <label for="password">Password</label><br>
                <input type="password" id="password" name="password" required> <br><br>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>