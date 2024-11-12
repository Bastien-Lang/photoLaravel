@extends('layout')

@section("content")
    <ul>
    @foreach($albums as $album)
        <li>
            <a href="{{route('detailsAlbum', ['id' => $album->id])}}">{{$album->titre}}</a>
        </li>
    @endforeach
    </ul>
@endsection