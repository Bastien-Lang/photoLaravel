<?php

namespace App\Http\Controllers;

use App\Models\Album;
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
}