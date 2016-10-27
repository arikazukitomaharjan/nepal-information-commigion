<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreatePhotoRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'title'=>'required|min:3',
            'description'=>'required',
            'date_created'=>'required',
            'status'=>'required',           
            'album_id'=>'required',   
            'image' => 'mimes:png,jpeg,jpg'         
		];
	}

}
