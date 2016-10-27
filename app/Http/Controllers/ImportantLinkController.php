<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repository\ImportantLinkRepository  as ImportantLink;
use App\Repository\ImportantLinkOfficeTypeRepository as ImportantLinkOfficeType;
use App\Repository\CategoryRepository as Category;
use Illuminate\Http\Request;
use App\Http\Requests\CreateImportantLinkRequest;
use Session;
class ImportantLinkController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(ImportantLink $importantLink)
	{
		$importantLink=$importantLink->all();
		return view('admin.importantLink.index')->with('importantLinks',$importantLink);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(ImportantLink $importantLink,CreateImportantLinkRequest $request,ImportantLinkOfficeType $type)
	{
		return view('admin.importantLink.create')->with('type',$type->lists('name','id'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ImportantLink $importantLink,CreateImportantLinkRequest $request)
	{
		$importantLink=$importantLink->create($request->all());
		Session::flash ( 'message', 'The important link was successfully added!.' );
        Session::flash ( 'flash_type', 'alert-success' );
		return redirect('important_links');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id,ImportantLink $importantLink)
	{
		//return view('artCategories.index')->with('Category', $Category->find($id));
		$importantLink=$importantLink->find($id);
		return view('frontend.important')->with('importantLink',$importantLink);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id,ImportantLink $importantLink,ImportantLinkOfficeType $type)
	{
		$importantLink=$importantLink->find($id);
		return view('admin.importantLink.edit')->with('importantLink',$importantLink)->with('type',$type->lists('name','id'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,ImportantLink $importantLink,CreateImportantLinkRequest $request)
	{
		$importantLink=$importantLink->find($id)->update($request->all());
			Session::flash ( 'message', 'The important link was successfully updated!.' );
        Session::flash ( 'flash_type', 'alert-success' );
		return redirect('important_links');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id,ImportantLink $importantLink)
	{
		$importantLink=$importantLink->find($id);
		$importantLink->delete($id);
		Session::flash ( 'message', 'The important link was successfully deleted!.' );
        Session::flash ( 'flash_type', 'alert-success' );
        return redirect('important_links');
	}

public function getAllImportantLinks(ImportantLink $importantLink,Category $category)
    {
    	$importantLinks=$importantLink->getImportantLinksOfficeType(1);
    	$aayog=$importantLink->getImportantLinksOfficeType(2);
    	$institutions=$importantLink->getImportantLinksOfficeType(3);
    	$government=$importantLink->getImportantLinksOfficeType(4);
    	$nonorganizations=$importantLink->getImportantLinksOfficeType(5);
    	$security=$importantLink->getImportantLinksOfficeType(6);
         
    	return view('frontend.includes.importantlink',compact('importantLinks','aayog','institutions','government','nonorganizations','security'));

    }


}