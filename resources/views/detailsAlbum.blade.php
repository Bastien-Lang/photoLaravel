@extends('layout')

@section("content")
    <h1>{{$album->titre}}</h1>
    <a href="?ordre=titre">Trier par titre</a>
    <div id="album">
        @foreach ($album->photos()->orderBy($ordre)->get() as $photo)
            <div class="photos default">
                <span>{{$photo->titre}}</span>
                <img src="{{$photo->url}}" alt="$photo->titre" id="photo{{$photo->id}}" class="small">
                
            </div>
        @endforeach
        <div id="overlay" class="hide">
            <img src="" alt="">
        </div>
    </div>
@endsection