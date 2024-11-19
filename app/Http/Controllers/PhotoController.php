<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhotoController extends Controller
{
    function index(){
        return view("index");
    }

    
    public function recherche(Request $request){
        $recherche = $request->input("recherche");
        $photos = Photo::where('titre','LIKE',"%{$recherche}%")->get();
        return view("rechercheResult", compact("photos", "recherche"));
    }
}