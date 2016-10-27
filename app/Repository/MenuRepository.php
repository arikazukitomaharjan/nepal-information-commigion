<?php
/**
 * Created by PhpStorm.
 * User: shashi
 * Date: 4/23/15
 * Time: 7:06 PM
 */

namespace app\Repository;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;
use Illuminate\Contracts\Auth\Guard;

/**
 * Class MenuRepository
 * @package app\Repository
 */
class MenuRepository extends Repository
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /*
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    /**
     * @param Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * @return string
     */
    function model()
    {
        return 'App\Menu';
    }

    /**
     * @return array
     */
    public function getDynamicMenus()
    {
       
        $user = $this->auth->user();

        $roles = $user->roles;
        $menus = [];
        foreach($roles as $role) {
            foreach ($role->menus as $menu) {
                if ($menu["parent_id"] > 0) {
                    $menus[$menu["parent_id"]][$menu["id"]] = $menu->toArray();
                } else {
                    $menus[$menu["id"]] = $menu->toArray();
                }
            }
        }
        return $menus;
    }

    /**
     * @param $menuID
     */
    public function getSubMenus($menuID){

    }
}