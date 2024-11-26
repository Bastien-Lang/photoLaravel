@extends('layout')

@section("content")
<div id="album">  
    @forelse($photos as $photo) 
        <div id="resultsRecherche">
            <span>Résultat(s) pour la recherche "{{$recherche}}"</span>
            <div class="photos default">
                <span>{{$photo->titre}}</span>
                <img src="{{$photo->url}}" alt="$photo->titre" id="photo{{$photo->id}}" class="small">
            </div>
        </div>
        <div id="overlay"></div>
    @empty
        <span>Aucun résultat pour la recherche "{{$recherche}}"</span>
    @endforelse
</div>

@endsection