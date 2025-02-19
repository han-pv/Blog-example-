<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <nav>
        <div class="container">
            <div class="d-flex">
                <div style="color:#ddd; font-size:28px; font-weight:bolder">BLOG</div>
                <div class="d-flex">
                    @auth
                    <a class="" href="#"
                        onclick="event.preventDefault(); document.getElementById('logout').submit();">
                        Logout
                    </a>
                    <form method="POST" action="{{ route('logout') }}" id="logout">
                        @csrf
                    </form>
                    @else
                    <div>
                        <a href="{{ route('login') }}">
                            Login
                        </a>
                    </div>
                    <div><a href="{{ route('register') }}" style="margin-left: 25px;">
                            Register
                        </a>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1>@auth Hello{{ auth()->user()->name }} @else Welcome! @endauth</h1>
        @foreach ($users as $user)
        <h2 style="color:blue">{{ $user->name . " ". $user->name}}</h2>
        @forelse ($user->posts as $post)
        <h3>{{ $post->title }}</h3>
        <p>{{ $post->content }}</p>
        @empty
        <p>{{ $user->name }} no posts yet.</p>
        @endforelse
        @endforeach
    </div>
</body>

</html>