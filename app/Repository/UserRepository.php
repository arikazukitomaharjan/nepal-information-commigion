<?php
/**
 * Created by PhpStorm.
 * User: shashi
 * Date: 4/23/15
 * Time: 7:53 PM
 */

namespace app\Repository;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;


/**
 * Class UserRepository
 * @package app\Repository
 */
class UserRepository extends Repository
{
    /**
     * @return string
     */
    function model()
    {
        return 'App\User';
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     * @throws \Bosnadev\Repositories\Exceptions\RepositoryException
     */
    function getModel()
    {
        return $this->makeModel();
    }


    /**
     * @param $id
     * @return array
     * @throws \Bosnadev\Repositories\Exceptions\RepositoryException
     */
    function getAllUsers($id)
    {
        return $this->makeModel()->where('id', 'LIKE', $id)->lists('username','id');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function hasProfile($id){
        return $this->find($id)->profile;
    }
}