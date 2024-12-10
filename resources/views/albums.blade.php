@extends('layout')

@section("content")
<section id = "sectionAlbum"> 
    <a href="?ordre=titre">Trier par titre</a>
    <a href="?ordre=creation">Trier par date</a>
    <ul>
    @foreach($albums as $album)
        <li>
        <a href="{{route('detailsAlbum', ['id' => $album->id])}}">
        @if($album->lastPhoto)
                <img src="{{$album->lastPhoto->url}}" alt="Dernière photo de l'album {{ $album->titre }}">
            @else
                <p>Aucune photo dans cet album.</p>
            @endif
           <h3>{{$album->titre}}</h3>
        </a>
        </li>
    @endforeach
    </ul>
    </section>
@endsection