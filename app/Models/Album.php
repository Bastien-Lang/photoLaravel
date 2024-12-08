<?php
// app/models/ Photo - Album - Tag
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'creation',
    ];
    public $timestamps = false;
    public function photos() {
        return $this->hasMany(Photo::class, "album_id");
    }

    public function user() {
        return $this->belongsTo(User::class,"user_id");
    }

    public function limitPosts(){
        return $this->hasMany('App\Models\Album')->limit(3);
    }

    // Méthode pour récupérer la dernière photo
    public function lastPhoto()
    {
        return $this->hasOne(Photo::class, 'album_id')->latestOfMany(); // Dernière photo par date de création
    }
}
