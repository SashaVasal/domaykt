<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @guest
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('login')}}">Вход</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">Регистрация</a>
                    </li>

            @endguest
            @auth
                @if(auth()->user()->role == 1)
                        <li class="nav-item"> <a class="nav-link" href="{{route('create_novostroy_user')}}">Добавить новострой</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('create_house')}}">Добавить дом</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('add_flats_forms')}}">Добавить квартиры</a></li>
                @endif
                    <li class="nav-item"> <a class="nav-link" href="{{route('profile')}}">Профиль</a></li>

            @endauth
           </ul>
        </div>
    </div>
</nav>

@yield('content')
<footer class="">

</footer>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
