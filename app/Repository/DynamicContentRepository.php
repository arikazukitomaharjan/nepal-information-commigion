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

/**
 * Class DynamicContentRepository
 * @package app\Repository
 */
class DynamicContentRepository extends Repository
{

    /**
     * @return string
     */
    function model()
    {
        return 'App\DynamicContent';
    }


    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     * @throws \Bosnadev\Repositories\Exceptions\RepositoryException
     */
    public function getMiddleLevelStaff()
    {
        return $this->makeModel()->where('type', "=", "staff")->get();
    }


    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     * @throws \Bosnadev\Repositories\Exceptions\RepositoryException
     */
    public function getTopLevelStaff()
    {
        return $this->makeModel()->where('type', "=", "staff-top-level")->get();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     * @throws \Bosnadev\Repositories\Exceptions\RepositoryException
     */
    public function getSecondLevelStaff()
    {
        return $this->makeModel()->where('type', "=", "staff-second-level")->get();
    }


}