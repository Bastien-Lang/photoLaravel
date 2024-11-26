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
            <a href="{{route('index')}}">Accueil</a>
            <a href="{{route('albums')}}">Albums</a>
            <div id="search">
                <form action="{{route('recherche')}}" method="get">
                <input type="text" name="recherche" placeholder="Rechercher une photo" required>
                <input type="submit" value="Valider">
                </form>
            </div>
        </nav>
    <header>
    <main> 
        @yield('content')
    </main>
    <script src="{{asset('main.js')}}"></script>
</body>

</html>