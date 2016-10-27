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
 * Class OfficeRepository
 * @package app\Repository
 */
class OfficeRepository extends Repository
{

    /**
     * @return string
     */
    function model()
    {
        return 'App\Office';
    }
    public function getOfficesdByDistrict($name)
    {
    	return $this->makeModel()->join('info_officers', 'offices.id', '=', 'info_officers.office_id')
            ->select('info_officers.id','offices.name AS office_name', 'info_officers.name','info_officers.post','info_officers.email','info_officers.phone','offices.phone1','offices.phone2')
            ->where('district',$name)
    		->paginate(10);
    }
    public function getOfficesdByOfficeType($type)
    {
    	
    	return $this->makeModel()->join('info_officers', 'offices.id', '=', 'info_officers.office_id')
    	->select('info_officers.id','offices.name AS office_name', 'info_officers.name','info_officers.post','info_officers.email','info_officers.phone','offices.phone1','offices.phone2')
    	->where('type',$type)
    	->paginate(10);
    	
    }
    public function getOfficesdByCentral()
    {
    	 
    	return $this->makeModel()->join('info_officers', 'offices.id', '=', 'info_officers.office_id')
    	->select('info_officers.id','offices.name AS office_name', 'info_officers.name','info_officers.post','info_officers.email','info_officers.phone','offices.phone1','offices.phone2')
    	->whereNotNull('central')
    	->paginate(10);
    	 
    }
    public function getAllOffices()
    {
    	return $this->makeModel()->join('info_officers', 'offices.id', '=', 'info_officers.office_id')
            ->select('info_officers.id','offices.name as office_name', 'info_officers.name','info_officers.post','info_officers.email','info_officers.phone','offices.phone1','offices.phone2')
            ->paginate(10);
    }    
}
