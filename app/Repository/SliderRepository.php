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
 * Class SliderRepository
 * @package app\Repository
 */
class SliderRepository extends Repository
{
    /**
     * @return string
     */
    function model()
    {
        return 'App\Slider';
    }


    /**
     * @param $count
     * @return mixed
     * @throws \Bosnadev\Repositories\Exceptions\RepositoryException
     */
    function getAllSliderContents($count){
        return $this->makeModel()->orderBy('created_at', 'DESC')->paginate($count);
    }
    public function sliderSearch($search_text)
    {
    	return $this->makeModel()->where('title', "LIKE", '%' . $search_text . '%')->orwhere('description', "LIKE", '%' . $search_text . '%')->orwhere('status', "LIKE", '%' . $search_text . '%')->get();
    }
}