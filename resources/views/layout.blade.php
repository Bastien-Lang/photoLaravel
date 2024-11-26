<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('app.css')}}">
</head>
<body>
    <header>
        <nav>
<<<<<<< HEAD
            <a href="{{route('index')}}">Accueil</a>
            <a href="{{route('albums')}}">Albums</a>
            <div id="search">
                <form action="{{route('recherche')}}" method="get">
                <input type="text" name="recherche" placeholder="Rechercher une photo" required>
                <input type="submit" value="Valider">
                </form>
=======
            <div class="left">
                <a href="{{route('index')}}">Accueil</a>
                <a href="{{route('albums')}}">Albums</a>
                <div id="search">
                    <form action="{{route('recherche')}}" method="get">
                    <input type="text" name="recherche" placeholder="Rechercher une photo" required>
                    <i class='bx bx-search-alt'></i>
                    <input type="submit" value="Valider">
                    </form>
                </div>
            </div>
            <div class="right">
            @auth
        Bonjour {{Auth::user()->name}}
        <a href="{{route('logout')}}"
           onclick="document.getElementById('logout').submit(); return false;">Logout</a>
        <form id="logout" action="{{route('logout')}}" method="post">
            @csrf
        </form>
    @else
        <a href="{{route('login')}}">Login</a>
        <a href="{{route('register')}}">Register</a>
    @endauth
>>>>>>> a31026b7c3dfe9b7b928c592762ba33210325cb0
            </div>
        </nav>
    </header>
    <main> 
        @yield('content')
    </main>
    <script src="{{asset('main.js')}}"></script>
</body>

</html>