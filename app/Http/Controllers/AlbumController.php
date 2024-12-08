<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Photo;

class AlbumController extends Controller
{
    function index() {
        $albums = Album::query()
        ->with('lastPhoto') // Charge la dernière photo de chaque album
        ->orderBy('creation', 'desc') // Trier les albums par date de création
        ->limit(3) // Limiter à 3 albums
        ->get();

    return view("index", compact('albums'));
    }

    function albums(){
        $albums = Album::all();
        return view("albums", compact("albums"));
    }
    function detailsAlbum(Request $request, $id){
        $album = Album::findOrFail($id);
        $ordre = $request->input("ordre") == null ? "id" : $request->input("ordre");
        $album = Album::findOrFail($id);
        return view("detailsAlbum", compact("album", "ordre"));
    }


        public function storeAlbum(Request $request)
    {
        // Validation des données
        $request->validate([
            'titre' => 'required|string|max:255',
            'creation' => 'required|date',
        ]);

        // Création de l'album
        Album::create([
            'titre' => $request->input('titre'),
            'creation' => $request->input('creation'),
        ]);

        // Redirection avec un message de succès
        return redirect()->route('albums')->with('success', 'Album ajouté avec succès !');
    }

    public function ajouterPhoto(Request $request, $id)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $hashname = $request->file('photo')->hashName();
        $request->file('photo')->storeAs('public/images', $hashname);
        $photo = new Photo();
        $photo->titre = $request->input("titre");
        $photo->url = env('APP_URL')."/storage/images/$hashname";
        $photo->album_id = $id;
        $photo->save();

        return redirect()->route('detailsAlbum', ['id' => $id])->with('success', 'Photo ajoutée avec succès !');
    }

    public function delete($id){
        $photo = Photo::findOrFail($id);
        $album_id = $photo->album_id;
        $photo->delete();
        return redirect(route('detailsAlbum', ['id'=>$album_id]));
    }
}