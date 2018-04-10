<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $table = 'tags';
    public $timestamps = false;

    protected $fillable = [
      'name', 'slug', 'description'
    ];

    public function TagToAnnonce()
    {
        return $this->belongsTo('AnnonceTag');
    }

}
