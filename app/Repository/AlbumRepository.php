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

class AlbumRepository extends Repository
{
    function model()
    {
        return 'App\Album';
    }
    public function albumSearch($search_text)
    {
    	return $this->makeModel()->where('title', "LIKE", '%' . $search_text . '%')->orwhere('description', "LIKE", '%' . $search_text . '%')->orwhere('date_created', "LIKE", '%' . $search_text . '%')->get();
    }

}
