<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('app.css')}}">
</head>
<body>
    <nav>
        <a href="{{route('index')}}">Accueil</a>
        <a href="{{route('albums')}}">Albums</a>
    </nav>
    <main> 
        @yield('content')
    </main>
</body>

</html>