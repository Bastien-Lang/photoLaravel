@extends('layout')

@section("content")
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
</section>

<section class="popular">
    <h2>Albums populaires</h2>
    <div class="album">
        <img src="popular_album1.jpg" alt="Popular Album 1" class="album-thumbnail">
        <h2>Voyage en montagne</h2>
        <a href="#" class="view-button">Voir l'album</a>
    </div>
</section>
@endsection
