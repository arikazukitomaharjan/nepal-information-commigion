<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repository\UserRepository as User;
use Folklore\Image\Facades\Image;
use Session;

use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param User $user
     * @return Response
     */
    public function index(User $user)
    {

        return view('admin.users.index')->with('users', $user->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param CreateUserRequest $request
     * @return Response
     */
    public function create(CreateUserRequest $request,User $user)
    {
         return view('admin.users.create')->with('users',$user->lists('username','id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id, User $user)
    {

        $users= $user->findBy('id', $id);
    
        return view('admin.users.profile', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id, User $user)
    {
        return view('admin.users.edit')->with('users', $user->find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, CreateUserRequest $request, User $user)
    {
        $user->find($id)->update($request->all());

        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id,CreateUserRequest $request, User $user)
    {
        $user= $user->find ( $id );
		$user->delete ();
		Session::flash ( 'message', 'The user was successfully deleted!.' );
		Session::flash ( 'flash_type', 'alert-success' );
		return redirect('users');
        
    }

    public function changeStatus($id, $status, User $user)
    {
        $user->update(array('status' => $status), $id);


        Session::flash('message', "The status was successfully updated to $status.");
        Session::flash('flash_type', 'alert-success');

        return redirect('profiles');
    }
     public function updateProfile(CreateUserRequest $request,User $users)
    {

        $ext = $request->file('image')->getClientOriginalExtension();

        $id = $request->input('id');

        $imageName = $id . "." . $ext;

        $request->file('image')->move(
            base_path() . '/public/uploads/images', $imageName
        );

        Image::make(base_path() .'/public/uploads/images/' . $imageName, array(
            'width' => 190,
            'height' => 121,
        ))->save(base_path() .'/public/uploads/images/'.$imageName);


        $users->find($id)->update(array('image' => $imageName));
      
        Session::flash('message', 'The profile was successfully added!.');
        Session::flash('flash_type', 'alert-success');


        return redirect('users');
    }

}