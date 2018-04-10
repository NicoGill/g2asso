<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Commentaire extends Model
{

    protected $table = 'commentaires';
    public $timestamps = true;

    protected $fillable = [
      'name', 'slug', 'description'
    ];

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $guarded = array('id');

    public function annonce()
    {
        return $this->belongsTo('Annonce', 'annonce_id');
    }

}
