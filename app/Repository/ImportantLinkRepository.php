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
 * Class ImportantLinkRepository
 * @package app\Repository
 */
class ImportantLinkRepository extends Repository
{

    /**
     * @return string
     */
    function model()
    {
        return 'App\ImportantLink';
    }
    function getImportantLinksOfficeType($id){
    	return $this->makeModel ()->where ( 'type_id', "=", $id )->get ();
    }

    


}
