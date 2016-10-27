<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateInfoOfficerRequest;
use App\Repository\InfoOfficerRepository as InfoOfficer;
use App\Repository\OfficeRepository as Office;
use Session;
use Illuminate\Http\Request;
use Input;
use Excel;

class InfoOfficerController extends Controller {
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
	public function index(InfoOfficer $infoOfficer) {
		$infoOfficers = $infoOfficer->paginate ( $this->count );
		$infoOfficers->setPath ( '' );
		
		return view ( 'admin.infoOfficers.index', compact ( 'infoOfficers' ) );
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Office $office) {
		return view ( 'admin.infoOfficers.create' )->with ( 'offices', $office->lists ( 'name', 'id' ) );
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateInfoOfficerRequest $request, InfoOfficer $infoOfficer) {
		$infoOfficer = $infoOfficer->create ( $request->all () );
		Session::flash ( 'message', 'The information Officer was successfully added!.' );
		Session::flash ( 'flash_type', 'alert-success' );
		
		return redirect ( 'infoOfficers' );
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param int $id        	
	 * @return Response
	 */
	public function show($id) {
		//
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param int $id        	
	 * @return Response
	 */
	public function edit($id, CreateInfoOfficerRequest $infoOfficer, Office $office) {
		return view ( 'admin.infoOfficers.edit' )->with ( 'infoOfficer', $infoOfficer->find ( $id ) )->with ( 'offices', $office->lists ( 'name', 'id' ) );
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param int $id        	
	 * @return Response
	 */
	public function update($id, CreateInfoOfficerRequest $request, InfoOfficer $office) {
		$office->find ( $id )->update ( $request->all () );
		Session::flash ( 'message', 'The information office was successfully edited!.' );
		Session::flash ( 'flash_type', 'alert-success' );
		return redirect ( 'infoOfficers' );
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id        	
	 * @return Response
	 */
	public function destroy($id, InfoOfficer $infoOfficer) {
		$infoOfficer = $infoOfficer->find ( $id );
		$infoOfficer->delete ();
		Session::flash ( 'message', 'The information Officer was successfully deleted!.' );
		Session::flash ( 'flash_type', 'alert-success' );
	}
	
	/**
	 * Show the form for selecting file for importing
	 *
	 * @return Response
	 */
	public function import() {
		return view ( 'admin.infoOfficers.fileImport' );
	}
	/**
	 * Importing the data in database
	 *
	 * @return Response
	 */
	public function importData(InfoOfficer $infoOfficer, Office $office) {
		ini_set('max_execution_time', 300);
		$input = Input::file ( 'csv_file' );
		$filename = $input->getRealPath ();
		
		Excel::load ( $filename, function ($reader) use($infoOfficer, $office) {
			$rows = $reader->all ();
			$rows->toArray ();
			foreach ( $rows as $row ) {
				$officeObj = $office->create ( array (
						"name" => $row ['office_name'],
						"district" => $row ['district'],
						"central" => $row ['central'],
						"phone1" => $row ['phone_number1'],
						"phone2" => $row ['phone_number2'] 
				) );
				$officeId = $officeObj->id;
				if ($row ['district'] == Null) {
					$infoOfficer->create ( array (
							"name" => $row ['officer_name'],
							"phone" => $row ['mobile_number'],
							"post" => $row ['post'],
							"email" => $row ['email'],
							"fax" => $row ['fax'],
							"office_id" => $officeId,
							"category" => "Central" 
					) );
				} else {
					$infoOfficer->create ( array (
							"name" => $row ['officer_name'],
							"phone" => $row ['mobile_number'],
							"post" => $row ['post'],
							"email" => $row ['email'],
							"fax" => $row ['fax'],
							"office_id" => $officeId,
							"category" => "District" 
					) );
				}
			}
			;
		} );
		
		Session::flash ( 'message', 'The import was successful!.' );
		Session::flash ( 'flash_type', 'alert-success' );
		return redirect ( 'infoOfficers' );
	}
	
	/* public function searchInfoOfficersByCategory() {
		return view ( 'frontend.includes.searchInfoOfficerByCategory' );
	} */
	
	public function searchInfoOfficersByOthers() {
		return view ( 'frontend.includes.searchInfoOfficersByOthers' );
	}
	/* public function searchInfoOfficersByCentral() {
		return view ( 'frontend.includes.searchInfoOfficersByCentral' );
	} */
	public function searchInfoOfficersByDistrict() {
		return view ( 'frontend.includes.searchInfoOfficersByDistrict' );
	}
	/**
	 * Getting information officer details by office type
	 *
	 * @return Response
	 */
	public function getInfoOfficerDetailsByCentral(InfoOfficer $infoOfficer, Office $office) {
	  $sn=0;
	  $officers = $office->getOfficesdByCentral ();
	  return view ( 'frontend.includes.searchInfoOfficersByCentral', compact ( 'officers','sn' ) );	
	}
	
	
	
	/**
	 * Getting information officer details by district
	 *
	 * @return Response
	 */
	public function getInfoOfficerDetailsByDistrict(InfoOfficer $infoOfficer, Office $office, $district) {
		
		$sn=0;
		if ($district == 'सबै') {
			$officers = $office->getAllOffices();
		}
		 else{
			$officers = $office->getOfficesdByDistrict ( $district );
		}
		
		return view ( 'frontend.includes.searchResultTemplate', compact ( 'officers','sn' ) );
	}
	
	/**
	 * Getting information officer details by office type
	 *
	 * @return Response
	 */
	public function getInfoOfficerDetailsByOthers(InfoOfficer $infoOfficer, Office $office, $officeType) {
		$sn=0;
		if ($officeType == 'सबै') {
			$officers = $office->getAllOffices();
		}
		else{
			$officers = $office->getOfficesdByOfficeType ( $officeType );
		}		
		return view ( 'frontend.includes.searchResultTemplate', compact ( 'officers','sn' ) );
	}


}


