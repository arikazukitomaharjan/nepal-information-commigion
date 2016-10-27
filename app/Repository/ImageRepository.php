<?php
/**
 * Created by PhpStorm.
 * User: shashi
 * Date: 4/23/15
 * Time: 7:06 PM
 */

namespace app\Repository;

use Bosnadev\Repositories\Eloquent\Repository;

/**
 * Class ImageRepository
 * @package app\Repository
 */
class ImageRepository extends Repository
{

    /**
     * @return string
     */
    function model()
    {
        return 'App\Image';
    }

    /**
     * @param Image $image
     * @return array
     */
    public function uploadMultipleImage($files)
    {

        $return_files = [];
        foreach ($files as $file) {

            $name = $file->getClientOriginalName();
            $ext = $file->getClientOriginalExtension();

            $newimage = $this->create(array("name" => $name));
            $newfilename = $newimage->id . "." . $ext;

            $this->update(array("file" => $newfilename), $newimage->id);


            $file->move(
                base_path() . '/public/uploads/article/', $newfilename
            );

            $return_files[] = array("name" => url("/public/uploads/article/" . $newfilename));


        }

        return $return_files;

    }




}