<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnnonceTag extends Model
{

    protected $table = 'annonce_tag';
    public $timestamps = false;

    protected $fillable = [
      'name', 'slug', 'description'
    ];

    public function annonces()
    {
        return $this->belongsTo('Annonce', 'annonce_id');
    }

    public function tags()
    {
        return $this->hasOne('Tag');
    }

}
