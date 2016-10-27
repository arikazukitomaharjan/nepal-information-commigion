<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 * @package App
 */
class ImportantLinkOfficeType extends Model {

    /**
     * @var array
     */
    protected $guarded = [];

   

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function importantLinks()
    {
        return $this->hasMany('App\ImportantLink');
    }

   

}
