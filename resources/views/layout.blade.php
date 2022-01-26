<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body class="bg-light">

    
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">Voting</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            @if(auth()->user()->role->name === 'user')
                                <li class="nav-item">
                                    <a class="nav-link {{ url()->current() == route('vote.index') ? 'active' : '' }}" aria-current="page" href="{{ route('vote.index') }}">Vote</a>
                                </li>
                            @endif
                            @if(auth()->user()->role->name === 'admin')
                                <li class="nav-item">
                                    <a class="nav-link {{ url()->current() == route('user.index') ? 'active' : '' }}" href="{{ route('user.index') }}">Users</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ url()->current() == route('user.create') ? 'active' : '' }}" href="{{ route('user.create') }}">Add new user</a>
                                </li>
                            @endif
                        </ul>
                    <div class="auth ms-auto">
                        @guest
                            <a href="{{ route('login') }}" class="btn btn-outline-light">Login</a>
                            <a href="{{ route('register') }}" class="btn btn-outline-light">Register</a>   
                        @endguest
                        @auth  
                            <form action="post" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Logout</button>
                            </form>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="content py-5">
        <div class="container">

            @yield('content')

        </div>
    </div>
    
    <script src="{{ asset('js/all.min.js') }}"></script>
    {{-- <script src="{{ asset('js/popper.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script> 
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    @yield('script')
</body>
</html>