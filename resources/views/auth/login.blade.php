<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('login') }}" method="POST">
        @csrf
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required> <br>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required> <br>
            <button type="submit">Login</button>
    </form>
</body>
</html>