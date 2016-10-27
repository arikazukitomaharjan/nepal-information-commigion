<?php namespace App;

/**
 * Created by PhpStorm.
 * User: shashi
 * Date: 4/13/15
 * Time: 7:26 PM
 */
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function menus(){
        return $this->belongsToMany('App\Menu');
    }
}