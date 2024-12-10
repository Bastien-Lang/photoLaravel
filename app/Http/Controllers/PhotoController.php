<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhotoController extends Controller
{
      public function recherche(Request $request){
        $recherche = $request->input("recherche");
        $photos = Photo::where('titre','LIKE',"%{$recherche}%")->get();
        return view("rechercheResult", compact("photos", "recherche"));
    }
    function ajouterAlbum(){
      return view("ajouterAlbum");
  }
  public function photosParTags($tagId)
  {
      // Récupérer les photos associées au tag donné
      $photos = Photo::whereHas('tags', function ($query) use ($tagId) {
          $query->where('tags.id', $tagId);
      })->get();
  
      // Récupérer le nom du tag pour afficher dans la vue (optionnel)
      $tag = Tag::find($tagId);
  
      return view('tri', compact('photos', 'tag'));
  }
  
}