<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/layout.styles.css">
    <link rel="stylesheet" href="/css/styles.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,300,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
    <div class="navigation">
        <ul>
            <li class="list active">
                <a href="/">
                    <span class="icon material-symbols-outlined">home</span>
                    <span class="title-menu">Inicio</span>
                </a>
            </li>

            <li class="list">
                <a href="/contato">
                    <span class="icon material-symbols-outlined">phone</span>
                    <span class="title-menu">Contato</span>
                </a>
            </li>
            @auth
                <li class="list">
                    <a href="/events/create">
                        <span class="icon material-symbols-outlined">add</span>
                        <span class="title-menu">Criar Evento</span>
                    </a>
                </li>

                <li class="list">
                    <a href="/dashboard">
                        <span class="icon material-symbols-outlined">view_list</span>
                        <span class="title-menu">Meus Eventos</span>
                    </a>
                </li>

                <form action="/logout" method="POST">

                    <li class="list">
                        <a  href="/logout"
                            onclick="   event.preventDefault();
                                        this.closest('form').submit();">
                            @csrf
                            <span class="icon material-symbols-outlined">logout</span>
                            <span class="title-menu">Logout</span>
                        </a>
                    </li>
                </form>

            @endauth

            @guest
                <li class="list">
                    <a href="/login">
                        <span class="icon material-symbols-outlined">login</span>
                        <span class="title-menu">Login</span>
                    </a>
                </li>

                <li class="list">
                    <a href="/resgister">
                        <span class=" icon material-symbols-outlined">how_to_reg</span>
                        <span class="title-menu">Registro</span>
                    </a>
                </li>
            @endguest

        </ul>
    </div>
    <div class="body">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
