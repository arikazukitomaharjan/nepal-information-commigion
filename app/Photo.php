<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Photo extends Model {

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function portfolio(){
        return $this->belongsTo('App\Profile');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function album()    {
        return $this->belongsTo('App\Album');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function art_category(){
        return $this->belongsTo('App\ArtCategory');
    }

    /**
     * @param bool $excludeDeleted
     * @return $this
     */
  
}
