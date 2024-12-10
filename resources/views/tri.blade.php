@extends('layout')

@section('content')
    <h1>Photos associées au tag : {{ $tag->nom }}</h1>

    <div id="album">
        @forelse ($photos as $photo)
        <div class="photos default">
            <span>{{$photo->titre}}</span>
            <img src="{{$photo->url}}" alt="{{$photo->titre}}" id="photo{{$photo->id}}" class="small">

            @auth
                <a href="{{route('delete', ['id' => $photo->id])}}">Supprimer photo </a>
            @endauth
        </div>
        @empty
            <p>Aucune photo trouvée pour ce tag.</p>
        @endforelse
    </div>
    <div id="overlay" class="hide">
        <img src="" alt="">
    </div>
@endsection
