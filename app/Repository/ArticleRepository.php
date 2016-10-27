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
 * Class ArticleRepository
 * @package app\Repository
 */
class ArticleRepository extends Repository
{

    /**
     * @return string
     */
    function model()
    {
        return 'App\Article';
    }

    /**
     * @param $count
     * @param string $type
     * @return mixed
     * @throws \Bosnadev\Repositories\Exceptions\RepositoryException
     */
    function getArticlesByPublishedDate($count, $type = "%")
    {
        return $this->makeModel()->where('type', "LIKE", $type)->orderBy('title')->paginate($count);
    }

    /**
     * @param $count
     * @param string $type
     * @return mixed
     * @throws \Bosnadev\Repositories\Exceptions\RepositoryException
     */
    function getArticlesByPublishedDateen($count, $type = "%")
    {
        return $this->makeModel()->where('type', "LIKE", $type)->orderBy('title_en')->paginate($count);
    }

    /**
     * @param $id
     * @param $count
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     * @throws \Bosnadev\Repositories\Exceptions\RepositoryException
     */
    public function getArticlesByCategory($id, $count)
    {
        return $this->makeModel()->where('category_id', "=", $id)->orderBy('date_created','DESC')->paginate($count);
    }

    /**
     * @param $search_text
     * @param $locale
     * @param $date
     * @param $type
     * @return mixed
     * @throws \Bosnadev\Repositories\Exceptions\RepositoryException
     */
    public function postArticleSearch($search_text, $locale, $date, $type)
    {
        $first = $this->makeModel()->where('title_' . $locale, "LIKE", '%' . $search_text . '%')->where('date_created',
            "LIKE", '%' . $date . '%')->where('category_id', "=", $type);
        // $date=$this->makeModel()->where('date_created', 'LIKE', $date . '%');
        $test = $this->makeModel()->where('description_' . $locale, "LIKE",
            '%' . $search_text . '%')->where('date_created', "LIKE", '%' . $date . '%')->where('category_id', "=",
            $type)->unionAll($first->getQuery())->get();

        return ($test);
        //return $this->makeModel()->where('description_ne', "LIKE",'%'.$search_text.'%' )->get();
        // return $this->makeModel()->where('title_en', "LIKE",'%'.$query.'%' )->union($first)->get();
        /* return $this->makeModel()->whereRaw(
             "MATCH(title_ne,title_ne,description_ne) AGAINST(? IN BOOLEAN MODE)",
             array($q))->get();*/
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getSingleArticleById($id)
    {
        return $this->find($id);
    }
    public function articleSearch($search_text,$search_category,$locale)
    {
    	if($search_text != NUll && $search_category==0){
    		return $this->makeModel()->where('title_' . $locale, "LIKE", '%' . $search_text . '%')->orwhere('description_' . $locale, "LIKE", '%' . $search_text . '%')->orwhere('category_id', "LIKE", '%' . $search_text . '%')->rightJoin('categories', 'categories.id', '=', 'articles.category_id')->orwhere('categories.name',"LIKE", '%' . $search_text . '%')->get();
    		
    	}
    	elseif($search_category != 0 && $search_text == Null){
    		return $this->makeModel()->where('category_id', "=", $search_category)->get();
    	}
    	else{
    		return $this->makeModel()->where('title_' . $locale, "LIKE", '%' . $search_text . '%')->orwhere('description_' . $locale, "LIKE", '%' . $search_text . '%')->where('category_id', "=",$search_category)->get();
    	}
    }
}