@extends('layout')

@section('content')
<div class="container">
    <h1>Ajouter un nouvel album</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('storeAlbum') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="titre" class="form-label">Nom de l'album</label>
            <input type="text" class="form-control" id="titre" name="titre" value="{{ old('titre') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Ajouter l'album</button>
    </form>
</div>
@endsection