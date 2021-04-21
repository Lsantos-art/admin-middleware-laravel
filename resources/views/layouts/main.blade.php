<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/7a4aa7b0e2.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body>

    <!-- Just an image -->
    @if (auth()->user()->role == 'admin')
        <nav class="navbar navbar-dark bg-dark mb-3">
            <a class="navbar-brand" href="#">
            <img src={{ url('img/logo.png') }} width="30" height="30" alt="">
            </a>
            <p class="text-white">Menu do admin</p>
        </nav>
    @else
        <nav class="navbar navbar-dark bg-dark mb-3">
            <a class="navbar-brand" href="#">
            <img src={{ url('img/logo.png') }} width="30" height="30" alt="">
            </a>
            <p class="text-white">Menu do usuário</p>
        </nav>
    @endif

    <div class="container">
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-secondary btn-sm">
                Logout
                <i class="fas fa-power-off"></i>
            </button>
        </form>
    </div>


    <div class="container">
        <div class="container my-2">
            @include('partials.message')
        </div>
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
