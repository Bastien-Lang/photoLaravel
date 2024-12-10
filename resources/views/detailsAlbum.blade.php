@extends('layout')

@section("content")
    <h1>{{$album->titre}}</h1>
    <a href="?ordre=titre">Trier par titre</a>
    @auth
        <div class="add-photo">
            <form action="{{ route('ajouterPhoto', ['id' => $album->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="titre" class="form-label">Titre de la photo</label>
                    <input type="text" class="form-control" id="titre" name="titre">
                </div>

                <div class="mb-3 tags">
                @foreach($tags as $tag)
                    <div>
                        <label for="{{$tag->nom}}" class="form-label">{{$tag->nom}}</label>
                        <input type="checkbox" class="form-control" name="tags[]" id="{{$tag->nom}}" value="{{$tag->id}}">
                    </div>
                @endforeach
                </div>

                <div class="mb-3">
                    <label for="photo" class="form-label">Choisir une photo</label>
                    <input type="file" class="form-control" id="photo" name="photo" accept="image/*" required>
                </div>

                <button type="submit" class="btn btn-primary">Ajouter la photo</button>
            </form>
        </div>
    @endauth
    <div id="album">
        @foreach ($album->photos()->orderBy($ordre)->get() as $photo)
            <div class="photos default">
                <span>{{$photo->titre}}</span>
                <img src="{{$photo->url}}" alt="{{$photo->titre}}" id="photo{{$photo->id}}" class="small">

                @auth
                    <a href="{{route('delete', ['id' => $photo->id])}}">Supprimer photo </a>
                @endauth
            </div>

        @endforeach
        <div id="overlay" class="hide">
            <img src="" alt="">
        </div>
    </div>
@endsection