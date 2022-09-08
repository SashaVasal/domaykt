<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"
    />

    <link
        rel="stylesheet"
        href="{{asset('css/style.css')}}"
    />

    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"
    ></script>

    <!-- ✅ load Bootstrap JS ✅ -->
    <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"
    ></script>
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
                        <li class="nav-item"> <a class="nav-link" href="{{route('setup_slide')}}">Настроить слайд</a></li>
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






<script>

</script>
</body>
</html>
