<?php namespace App\Http\Controllers;

use App\Repository\ImageRepository as Image;
use App\Http\Requests\CreateImageRequest;

/**
 * Class ImageController
 * @package App\Http\Controllers
 */
class ImageController extends Controller
{

    /**
     *
     */
    public function __construct()
    {


    }


    /**
     * @param Image $image
     * @param CreateImageRequest $request
     * @return array
     */
    public function uploadMultipleImage(Image $image, CreateImageRequest $request)
    {
        $files = $request->file('files');
        return $image->uploadMultipleImage($files);

    }

}