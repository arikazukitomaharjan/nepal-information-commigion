<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateProfileRequest;
use Folklore\Image\Facades\Image;
use App\Http\Requests\CreateUploadProfileRequest;
use App\Repository\ProfileRepository as Profile;
use App\Repository\CategoryRepository as Category;
use App\Repository\TagRepository as Tag;
use Illuminate\Http\Request;
use App\Repository\UserRepository as User;
use Session;

class ProfileController extends Controller
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
    public function __construct()
    {

        $this->count = 5;
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Profile $profile)
    {
        $profiles = $profile->paginate($this->count);
        $profiles->setPath('');
        return view('admin.profiles.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(User $user)
    {
    	
        return view('admin.profiles.create')->with('users',$users=$user->lists('username','id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateProfileRequest $request
     * @return Response
     */
    public function store(CreateProfileRequest $request, Profile $profile, User $user)
    {  	
        $newPortfolio = $profile->create(
            array(
                "first_name" => $request->input('first_name'),
                "last_name" => $request->input('last_name'),
                
                "contact_no" => $request->input('contact_no'),
                "description" => $request->input('description'),
                "user_id" => $request->input('user_id')
            ));
        Session::flash('message', 'The profile was successfully added!.');
        Session::flash('flash_type', 'alert-success');

        $logged_in_user = $user->find($request->input('user_id'));
        if ($logged_in_user->hasRole(array('admin')))
            return redirect('portfolios');
        else
            return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id, Profile $portfolio)
    {

        $artist = $portfolio->findBy('id', $id);

        return view('admin.profiles.profile', compact('artist'));


        //return view('frontend.singleArtistProfile',compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id, Profile $profile)
    {
        return view('admin.profiles.edit')->with('profiles', $profile->find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, CreateProfileRequest $request, Profile $profile)
    {
        $profile->find($id)->update($request->all());
        Session::flash('message', 'The Profile  was successfully Updated!.');
        Session::flash('flash_type', 'alert-success');

        return redirect('profiles');
    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id,Profile $profile)
    {
       //
    }

    public function getArtistsByCategoryNArtist(ArtCategory $category, Portfolio $portfolio, Request $request) {
        $searchCategory = ($request->input('category')) ? $request->input('category') : "%";
        $searchArtist = ($request->input('artist_name')) ? $request->input('artist_name') : "%";

        return $portfolio->findByCategoryNArtist($category, array($searchCategory, $searchArtist));

    }

    public function searchArtistByAlphabet(Request $request, Portfolio $portfolio)
    {
        return $portfolio->searchArtistByAlphabet($request->input('alphabet'));
    }
    
     /**
     * @param CreateUploadPortfolioRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function updateProfile(CreateUploadProfileRequest $request,Profile $profile)
    {

        $profile->find($id)->update($request->all());
        Session::flash('message', 'The Profile  was successfully Updated!.');
        Session::flash('flash_type', 'alert-success');

        return redirect('profiles');

      
    }


}
