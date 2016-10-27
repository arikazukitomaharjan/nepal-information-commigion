<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ImportantLink extends Model {

	 protected $guarded = [];

	 public function category()
    {
        return $this->belongsTo('App\ImportanLinkOfficeType');
    }

}
