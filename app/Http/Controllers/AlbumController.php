<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
    function index() {
        $albums = Album::query()
        ->with('lastPhoto') // Charge la dernière photo de chaque album
        ->orderBy('creation', 'desc') // Trier les albums par date de création
        ->limit(3) // Limiter à 3 albums
        ->get();
        $tags = Tag::all();
    return view("index", compact('albums', 'tags'));
    }

    function albums(Request $request){
        $ordre = $request->input('ordre') ?? 'id';
        $albums = Album::orderBy($ordre, 'asc')->get();
        return view("albums", compact("albums", "ordre"));
    }
    function detailsAlbum(Request $request, $id){
        $ordre = $request->input("ordre") == null ? "id" : $request->input("ordre");
        $album = Album::findOrFail($id);
        $tags = Tag::all();
        return view("detailsAlbum", compact("album", "ordre", "tags"));
    }



        public function storeAlbum(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255'
        ]);
        $date = date('Y-m-d');
        Album::create([
            'titre' => $request->input('titre'),
            'creation' => $date,
        ]);
        return redirect()->route('albums')->with('success', 'Album ajouté avec succès !');
    }

    public function ajouterPhoto(Request $request, $id)
{
    $request->validate([
        'titre' => 'required|string|max:255',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif',
        'tags' => 'required|array|min:1'
    ]);

    $hashname = $request->file('photo')->hashName();
    $request->file('photo')->storeAs('public/images', $hashname);

    $photo = new Photo();
    $photo->titre = $request->input('titre');
    $photo->url = env('APP_URL') . "/storage/images/$hashname";
    $photo->album_id = $id;
    $photo->save();

    $photoId = $photo->id;
    $tags = $request->input('tags');

    foreach ($tags as $tag) {
        DB::table('possede_tag')->insert([
            'tag_id' => $tag,
            'photo_id' => $photoId,
        ]);
    }

    return redirect()->route('detailsAlbum', ['id' => $id])->with('success', 'Photo ajoutée avec succès !');
}


    public function delete($id){
        $photo = Photo::findOrFail($id);
        $album_id = $photo->album_id;
        $photo->delete();
        return redirect(route('detailsAlbum', ['id'=>$album_id]));
    }

    

}

