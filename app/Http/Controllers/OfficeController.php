<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\CreateOfficeRequest;
use App\Office;
use Session;
class OfficeController extends Controller {
	/**
	 *
	 * @var int
	 */
	private $count;
	
	/*
	 * Create a new controller instance. @return void
	*/
	/**
	 */
	public function __construct() {
	$this->count = 10;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Office $office)
	{
		$offices = $office->paginate( $this->count );
		$offices->setPath ( '' );
		
		return view('admin.offices.index',compact('offices'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view ( 'admin.offices.create' );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateOfficeRequest $request,Office $office)
	{
		
		$office = $office->create($request->all());
		Session::flash ( 'message', 'The office was successfully added!.' );
		Session::flash ( 'flash_type', 'alert-success' );		
		return redirect ( 'offices' );
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id,Office $office)
	{

		return view ( 'admin.offices.edit' )->with('office', $office->find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,CreateOfficeRequest $request,Office $office)
	{


		$office->find($id)->update($request->all());
        Session::flash('message', 'The office was successfully edited!.');
        Session::flash('flash_type', 'alert-success');
        return redirect('offices');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id,Office $office)
	{
		$office = $office->find ( $id );
		$office->delete ();
		Session::flash ( 'message', 'The office was successfully deleted!.' );
		Session::flash ( 'flash_type', 'alert-success' );
	}

}
