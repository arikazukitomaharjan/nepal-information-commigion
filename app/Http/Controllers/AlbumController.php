<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateAlbumRequest;
use App\Repository\AlbumRepository as Album;
use App\Repository\UserRepository as User;

use Request;
use Session;

/**
 * Class AlbumController
 * @package App\Http\Controllers
 */
class AlbumController extends Controller


    protected $album;

    /**
     * @var int
     */
    private $count;

    /*
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->count = 10;
    }


    /**
     * @param Album $album
     * @return \Illuminate\View\View
     */
    public function index(Album $album)
    {
        $albums = $album->paginate($this->count);
        return view('admin.albums.index',compact('albums'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(User $user)
    {

        return view('admin.albums.create')->with('users', $user->all());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateAlbumRequest $request
     * @return Response
     */
    public function store(CreateAlbumRequest $request,Album $album)
    {
        $album->create($request->all());
        Session::flash('message', 'The Album was successfully added!.');
        Session::flash('flash_type', 'alert-success');
        return redirect('albums');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id, Album $album)
    {
        return view('admin.albums.index')->with('albums', $album->find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id, User $user, Album $album)
    {

        return view('admin.albums.edit')->with('album', $album->find($id))->with('users', $user->all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, CreateAlbumRequest $request, Album $album)
    {
        $album->find($id)->update($request->all());
        Session::flash('message', 'The Album was successfully Updated!.');
        Session::flash('flash_type', 'alert-success');
        return redirect('albums');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id,Album $album)
    {        dd("delete");
        $album=$album->find($id);
        $album->delete();
        Session::flash('message', 'The album was successfully deleted!.');
        Session::flash('flash_type', 'alert-success');
    }

    /**
     * @return mixed
     */
    public function getAllAlbum()
    {
        return $this->album->all();
    }
    public function albumSearch(Album $album, CreateAlbumRequest $request) {
    
    	$search_text = $request->input ( 'search_text' );
    
    
    	$albums= $album->albumSearch($search_text);
    
    	return view('admin.albums.search', compact('albums'));
    }
}

