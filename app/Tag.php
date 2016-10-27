<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles()
    {
       return $this->hasMany('App\Article');
    }
}
