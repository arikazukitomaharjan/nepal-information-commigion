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

class ArtCategory extends Repository
{

    /**
     * @return string
     */
    function model()
    {
        return 'App\ArtCategory';
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     * @throws \Bosnadev\Repositories\Exceptions\RepositoryException
     */
    function getModel(){
        return $this->makeModel();
    }

    /**
     * @return mixed
     */
    public function getAllCategories(){
        return $this->lists('name','id');
    }
}
