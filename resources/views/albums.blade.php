@extends('layout')

@section("content")
<section id = "sectionAlbum"> 
    <ul>
    @foreach($albums as $album)
        <li>
        <a href="{{route('detailsAlbum', ['id' => $album->id])}}">
        @if($album->lastPhoto)
                <img src="{{$album->lastPhoto->url}}" alt="Dernière photo de l'album {{ $album->titre }}">
            @else
                <p>Aucune photo dans cet album.</p>
            @endif
           {{$album->titre}}
        </a>
        </li>
    @endforeach
    </ul>
    </section>
@endsection