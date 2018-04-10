<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Annonce extends Model
{

    protected $table = 'annonces';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $guarded = array('id');

    protected $fillable = [
      'user_id', 'categorie_id', 'title', 'slug', 'description', 'content', 'status'
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }

    public function tags()
    {
        return $this->belongsToMany(AnnonceTag::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
