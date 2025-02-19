<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav>
    <div>
        <div >
            <a href="{{ route('login') }}">login</a>
            <a href="{{ route('register') }}">register</a>
            <ul class="navbar-nav ms-auto">

                @auth
                    <li class="nav-item">
                        <a class="nav-link link-warning" href="#"
                           onclick="event.preventDefault(); document.getElementById('logout').submit();">
                            <i class="bi-box-arrow-right"></i> Logout
                            {{ auth()->user()->name }}
                        </a>
                        <form method="POST" action="{{ route('logout') }}" id="logout">
                            @csrf
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link link-warning" href="{{ route('login') }}">
                            <i class="bi-box-arrow-in-right"></i> Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-warning" href="{{ route('register') }}">
                            <i class="bi-person-plus"></i> Register
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
    <h1>Hello World</h1>
    @foreach ($users as $user)
    <h2 style="color:blue">{{ $user->name . " ". $user->name}}</h2>
        @forelse ($user->posts as $post)
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
        @empty
            <p>{{ $user->name }} no posts yet.</p>
        @endforelse
    @endforeach
</body>
</html>