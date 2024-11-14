@extends('layout')

@section("content")
    <h1>{{$album->titre}}</h1>
    <div id="album">
        @foreach ($album->photos as $photo)
            <div class="photos default">
                <span>{{$photo->titre}}</span>
                <img src="{{$photo->url}}" alt="$photo->titre" id="photo{{$photo->id}}" class="small">
            </div>
        @endforeach
        <div id="overlay"></div>
    </div>
@endsection