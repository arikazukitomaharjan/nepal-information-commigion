<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model {

	 protected $guarded = [];
	
	public function infoOfficers()
	{
		return $this->hasMany('App\InfoOfficer');
	}
}
