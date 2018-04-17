<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    //
    // https://laracasts.com/discuss/channels/general-discussion/different-fields-based-on-user-role

    /**
     * Get all of the employee's comments.
     */
    public function association()
    {
        // return $this->morphMany('App\Association', 'userable');
        return $this->morphOne(Association::class, 'userable');
    }
}
