<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model {


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }



}
