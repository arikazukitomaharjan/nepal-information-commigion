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
 * Class CategoryRepository
 * 
 * @package app\Repository
 */
class CategoryRepository extends Repository {
	
	/**
	 *
	 * @return string
	 */
	function model() {
		return 'App\Category';
	}
	
	/**
	 *
	 * @return \Illuminate\Database\Eloquent\Builder
	 * @throws \Bosnadev\Repositories\Exceptions\RepositoryException
	 */
	function getModel() {
		return $this->makeModel ();
	}
	
	/**
	 *
	 * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
	 * @throws \Bosnadev\Repositories\Exceptions\RepositoryException
	 */
	function getPaginateModel() {
		return $this->makeModel ()->paginate ( 10 );
	}
	
	/**
	 *
	 * @return mixed
	 */
	public function getAllCategories() {
		return $this->lists ( 'name', 'id' );
	}
	
	function getCategoryByName($categoryName) {
		return $this->makeModel ()->where ( 'name', "=", $categoryName )->get ();
	}
	
	function getAllParentAndChildCategories() {
		$parentCategories = $this->makeModel ()->where ( 'parentId', "=", 0 )->get ();
		$categoriesArray = array ();
		foreach ( $parentCategories as $parentCategory ) {
			$parentCategoryArray = $parentCategory->toArray ();
			$childCategories = $this->makeModel ()->where ( 'parentid', "=", $parentCategory->id )->get ();
			$parentCategoryArray ['childCategories'] = $childCategories->toArray ();
			array_push ( $categoriesArray, $parentCategoryArray );    		
    	} 
    	return $categoriesArray;
    }
	function getParentCategories(){
	 return $this->makeModel()->where('parentId',"=", 0 )->get();
	}

}
