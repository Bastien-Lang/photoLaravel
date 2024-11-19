@extends('layout')

@section("content")
<header>
    <nav>
        <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Albums</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <h1>Picture</h1>
    <img src="logo.png" alt="Logo" width="100" height="100">
    <h1>Albums Photos</h1>
</header>

<section class="albums">
    <div class="album">
        <img src="album1_thumbnail.jpg" alt="Album 1" class="album-thumbnail">
        <h2>Album 1</h2>
        <p>Description de l'album 1. Un aperçu de ce que vous trouverez à l'intérieur.</p>
        <a href="#" class="view-button">Voir l'album</a>
    </div>
    <div class="album">
        <img src="album2_thumbnail.jpg" alt="Album 2" class="album-thumbnail">
        <h2>Album 2</h2>
        <p>Description de l'album 2. Explorez de magnifiques photos prises lors de notre dernier voyage.</p>
        <a href="#" class="view-button">Voir l'album</a>
    </div>
    <div class="album">
        <img src="album3_thumbnail.jpg" alt="Album 3" class="album-thumbnail">
        <h2>Album 3</h2>
        <p>Description de l'album 3. Une collection d'images de moments inoubliables.</p>
        <a href="#" class="view-button">Voir l'album</a>
    </div>
    <!-- Ajouter d'autres albums ici -->
</section>

<section class="popular">
    <h2>Albums populaires</h2>
    <div class="album">
        <img src="popular_album1.jpg" alt="Popular Album 1" class="album-thumbnail">
        <h2>Voyage en montagne</h2>
        <a href="#" class="view-button">Voir l'album</a>
    </div>
    <!-- Ajouter des albums populaires ici -->
</section>

<style>
</style>
@endsection
