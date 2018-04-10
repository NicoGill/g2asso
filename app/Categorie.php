<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{

    protected $table = 'categories';
    public $timestamps = false;
    protected $guarded = array('id');

    protected $fillable = [
      'name', 'slug', 'description'
    ];

    public function annonces()
    {
        return $this->hasMany(Annonce::class);
    }

}
