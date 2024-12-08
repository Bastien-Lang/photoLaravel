<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('app.css')}}">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>
<body>
    <header>
        <nav>
            <div class="left">
                <a href="{{route('index')}}">Accueil</a>
                <a href="{{route('albums')}}">Albums</a>
                <div id="search">
                    <form action="{{route('recherche')}}" method="get">
                    <input type="text" name="recherche" placeholder="Rechercher une photo" required>
                    <button type="submit" value=""><box-icon name='search'></box-icon></button>
                    </form>
                </div>
            </div>
            <div class="right">
            @auth
            <a href="{{route('ajouterAlbum')}}">Ajouter un album</a>

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
            </div>
        </nav>
    </header>
    <main> 
        @yield('content')
    </main>
    <script src="{{asset('main.js')}}"></script>
</body>

</html>