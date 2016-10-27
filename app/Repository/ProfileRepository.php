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
use App\Repository\UserRepository as User;

/**
 * Class ProfileRepository
 * @package app\Repository
 */
class ProfileRepository extends Repository
{
    /**
     * @return string
     */
    function model()
    {
        return 'App\Profile';
    }

    /**
     * @param ArtCategory $category
     * @param UserRepository $user
     * @param $conditions
     * @return mixed
     * @throws \Bosnadev\Repositories\Exceptions\RepositoryException
     */
    function findByCategoryNArtist(ArtCategory $category, $conditions)
    {

        $artists = $this->makeModel()->where('first_name', "like", "%" . $conditions[1] . "%")->lists('id');
        $categories = $category->getModel()->where('name', "like", "%" . $conditions[0] . "%")->lists('id');

        return $this->makeModel()
            ->join('art_categories', 'portfolios.art_category_id', '=', 'art_categories.id')
            ->select('portfolios.id', 'portfolios.description', 'portfolios.first_name', 'portfolios.image',
                'art_categories.name as art_category')
            ->whereIn('portfolios.art_category_id', $categories)
            ->whereIn('portfolios.id', $artists)
            ->paginate(4);
    }

    /**
     * @param $alphabet
     * @return mixed
     * @throws \Bosnadev\Repositories\Exceptions\RepositoryException
     */
    public function searchArtistByAlphabet($alphabet){
        return $this->makeModel()
            ->join('art_categories', 'portfolios.id', '=', 'art_categories.id')
            ->select('portfolios.id', 'portfolios.description', 'portfolios.first_name', 'portfolios.image',
                'art_categories.name as art_category')
            ->where('first_name','LIKE', $alphabet."%")
            ->paginate(2);
    }

    /**
     * @param $id
     * @return array
     * @throws \Bosnadev\Repositories\Exceptions\RepositoryException
     */
    function getAllProfiles($id)
    {
        return $this->makeModel()->where('id', 'LIKE', $id)->lists('first_name','id');
    }

}