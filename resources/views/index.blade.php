@extends('layout')

@section("content")
<section class="albums">
    <div id="logo">
        <img src="{{asset('logo-picture.png')}}" alt="logo">
    </div>
    <div id="lasts">
        <h1>Les 3 derniers albums</h1>
    </div>
    <div id="allAlbums">
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
                    @if($album->lastPhoto)
                        <a href="{{route('detailsAlbum', ['id' => $album->id])}}" class="view-button">Voir l'album</a>
                    @endif
                </a>
            </div>
        @endforeach
    </div>
    <h2>Une envie créative ?</h2>
    <a href="{{route('ajouterAlbum')}}">Ajouter un album</a>
</section>
@endsection
