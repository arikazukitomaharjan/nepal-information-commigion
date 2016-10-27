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
 * Class InfoOfficerRepository
 * @package app\Repository
 */
class InfoOfficerRepository extends Repository
{

    /**
     * @return string
     */
    function model()
    {
        return 'App\InfoOfficer';
    }
    public function getOfficersdByOfficeId($id)
    {
    	return $this->makeModel()->where('office_id', "=", $id)->paginate(10)->get();
    }
  
    
   
}