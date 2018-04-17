<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benevole extends Model
{
    //
    // https://stackoverflow.com/questions/43771242/laravel-how-to-setup-a-morphone-relationship

    /**
     * Get all of the employee's comments.
     */
    public function benevole()
    {
        // return $this->morphMany('App\Benevole', 'userable');
        return $this->morphOne(Benevole::class, 'userable');
    }

}
