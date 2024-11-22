@extends('layout')

@section("content")
<section class="albums">
    @foreach($albums as $album)
    <div class="album">
        <a href="{{route('detailsAlbum', ['id' => $album->id])}}">
            @if($album->lastPhoto)
                <img src="{{$album->lastPhoto->url}}" alt="Dernière photo de l'album {{ $album->titre }}">
            @else
                <p>Aucune photo dans cet album.</p>
            @endif
            <h2>{{$album->titre}}</h2>
            <p>{{$album->creation}}</p>
            <a href="{{route('detailsAlbum', ['id' => $album->id])}}" class="view-button">Voir l'album</a>
        </a>
    </div>
    @endforeach
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
