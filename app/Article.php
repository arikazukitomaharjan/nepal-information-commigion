<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

/**
 * Class Article
 * 
 * @package App
 */
class Article extends Model {
	
	/**
	 *
	 * @var array
	 */
	protected $guarded = [ ];
	
	/**
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function tags() {
		return $this->belongsToMany ( 'App\Tag' );
	}
	
	/**
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function category() {
		return $this->belongsTo ( 'App\Category' );
	}
	
	/**
	 *
	 * @param bool|true $excludeDeleted        	
	 * @return $this \Illuminate\Database\Eloquent\Builder
	 */
	public function newQuery($excludeDeleted = true) {
		$query = parent::newQuery ( $excludeDeleted );
		if (Auth::check () && (Auth::user ()->hasRole ( 'Admin' ))) {
			return $query;
		} 

		else {
			
			return $query->where ( 'status', 'Published' );
		}
	}
}