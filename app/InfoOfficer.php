<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoOfficer extends Model {

	/**
	 * @var array
	 */
	protected $guarded = [];
/**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function office()
    {
        return $this->belongsTo('App\Office');
    }
}
