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

class PhotoRepository extends Repository
{
    /**
     * @return string
     */
    function model()
    {
        return 'App\Photo';
    }

    /**
     * @param $category
     * @param $user
     * @param $conditions
     * @return mixed
     * @throws \Bosnadev\Repositories\Exceptions\RepositoryException
     */
    public function findByCategoryAndArtist($category, $portfolio, $conditions){
        $artists = $portfolio->makeModel()->where('first_name', "like", "%" . $conditions[1] . "%")->lists('id');
        $categories = $category->makeModel()->where('name', "like", "%" .$conditions[0] . "%")->lists('id');

        return $this->makeModel()
            ->join('portfolios','portfolios.id','=','photos.portfolio_id')
            ->whereIn("photos.art_category_id", $artists)
            ->whereIn("photos.portfolio_id", $categories)
            ->where("photos.status", "=", "published")
            ->select('photos.id','photos.title', 'photos.image', 'portfolios.first_name', 'portfolios.last_name')
            ->paginate(12);
    }

    /**
     * @param $artistID
     * @param $recCount
     * @return static
     * @throws \Bosnadev\Repositories\Exceptions\RepositoryException
     */
    public function getArtistPhotos($artistID, $recCount){
        return $this->makeModel()->where('portfolio_id',"=", $artistID)->get(array('id','image','title'))->take($recCount);
    }

    /**
     * @param $photo
     * @param $albumID
     * @param $recCount
     * @return static
     * @throws \Bosnadev\Repositories\Exceptions\RepositoryException
     */
    public function getPhotosByAlbum($photo, $albumID, $recCount){
        return $this->makeModel()->where('album_id',"=", $albumID)->select('id','title', 'image')->paginate($recCount);
    }

    public function getSpecificPhoto(){
    	return $this->makeModel()->where('album_id',"=", 3)->latest()->take(8)->get();
    }

}