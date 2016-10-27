<?php namespace App\Http\Controllers;


use App\Http\Requests;

use App\Repository\ArtCategory as ArtCategory;

use App\Repository\ProfileRepository as Profile;
use App\Repository\AlbumRepository as Album;
use App\Repository\PhotoRepository as Photo;
use Folklore\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Repository\UserRepository as User;
use App\Http\Requests\CreatePhotoRequest;
use Session;

class PhotoController extends Controller
{
    /**
     * @var int
     */
    private $count;

    /*
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     *
     */
    public function __construct()
    {

        $this->count = 10;
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Photo $photo)
    {


        $photos = $photo->paginate($this->count);

        return view('admin.photos.index', compact('photos'));
    }

    /**
     * @param User $user
     * @param Album $album
     * @param ArtCategory $artCategory
     * @return $this
     */
    public function create(User $user, Album $album)
    {

        $all_users = $user->all();
        $albums = $album->all();
   

        return view('admin.photos.create', compact('all_users', 'albums'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreatePhotoRequest $request
     * @return Response
     */
    public function store(CreatePhotoRequest $request, Photo $photo)
    {
        $ext = $request->file('image')->getClientOriginalExtension();

        $photo = $photo->create($request->all());
        $imageName = $photo->id . "." . $ext;

        $request->file('image')->move(
            base_path() . '/public/uploads/images', $imageName
        );

       Image::make(base_path() .'/public/uploads/images/' . $imageName, array(
            'width' => 190,
            'height' => 121,
        ))->save(base_path() .'/public/uploads/thumbnails/'.$imageName);


        $photo->update(array('image' => $imageName));
        Session::flash('message', 'The photo was successfully added!.');
        Session::flash('flash_type', 'alert-success');

        return redirect('photos');
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id, Photo $photo)
    {
        $photo = $photo->find($id);

        return view('frontend.singleImageView', compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id, Photo $photo, Album $album)
    {
        return view('admin.photos.edit')->with('photo', $photo->find($id))->with('albums',
            $album->all());
	
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, CreatePhotoRequest $request, Photo $photo)
    {
  
        $photo_to_update = $photo->find($id);
        $uploaded_image = $request->file('image_upload');
        $parameter = $request->all();

        if (isset($uploaded_image)) {

            $ext = $uploaded_image->getClientOriginalExtension();
            $newImageName = $photo_to_update->id . "." . $ext;

            $uploaded_image->move(
                base_path() . '/public/uploads/images/', $newImageName
            );
            Image::make(base_path() . '/public/uploads/images/' . $newImageName, array(
                'width' => 774,
                'height' => 329,
            ))->save(base_path() . '/public/uploads/thumbnails/' . $newImageName);
            $parameter = $request->all();
            $parameter['image'] = $newImageName;

            /* remove this field from the parameters list */
            unset($parameter['image_upload']);

            $photo_to_update->update($parameter);

        } else {
            $photo_to_update->update($request->all());
            $photo_to_update->update($parameter);
        }

        return redirect('photos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        return "deleted";
    }

    /**
     * @param Photo $photo
     * @param ArtCategory $category
     * @param User $user
     * @param Request $request
     * @return mixed
     */
    public function getPhotosByCategoryNArtist(Photo $photo, ArtCategory $category, Profile $portfolio, Request $request)
    {

        $searchCategory = ($request->input('category')) ? $request->input('category') : "%";
        $searchArtist = ($request->input('artist_name')) ? $request->input('artist_name') : "%";

        return $photo->findByCategoryAndArtist($category, $portfolio, array($searchCategory, $searchArtist));
    }

    /**
     * @param Photo $photo
     * @param Request $request
     * @return static
     */
    public function getArtistPhotos(Photo $photo, Request $request)
    {
        $artistID = $request->input('artist_id');
        $recCount = $request->input('rec_count');

        return $photo->getArtistPhotos($artistID, $recCount);
    }

    public function getPhotosByAlbum(Photo $photo, $albumID)
    {
        $photos = $photo->getPhotosByAlbum($photo, $albumID, 18);
        $photos->setPath($albumID);

        return view('admin.photos.index', compact('photos'));
    }

}
