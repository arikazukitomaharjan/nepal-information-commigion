<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Album extends Model
{

    protected $guarded = [];

    public function photo()
    {
        return $this->hasMany('App\Photo');
    }

    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }
	  public function user()
    {
        return $this->belongsTo('App\User');
    }
   

}
