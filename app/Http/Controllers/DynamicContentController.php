<?php namespace App\Http\Controllers;

use App\Http\Requests\CreateDynamicContentRequest;
use App\Repository\DynamicContentRepository as DynamicContent;
use App\Repository\ArticleRepository as Article;
use Folklore\Image\Facades\Image;
use LaravelLocalization;
use File;
use Response;


use Session;


class DynamicContentController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | DynamicContentController
    |--------------------------------------------------------------------------
    |
    |
    |
    */
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(DynamicContent $dynamic)
    {
        return view('admin.dynamics.index')->with('dynamics', $dynamic->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.dynamics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateDynamicContentTable $request
     * @return Response
     */
    public function store(CreateDynamicContentRequest $request, DynamicContent $dynamic)
    {
       
        $uploaded_file = $request->file('image_file');

       // if(isset($uploaded_file))


        $parameter = $request->all();

       unset($parameter['image_file']);

         $dynamic = $dynamic->create($parameter);
        
        if(isset($uploaded_file)){

           
            $ext = $uploaded_file->getClientOriginalExtension();
            $imageName = $dynamic->id . "." . $ext;


            $uploaded_file->move(
                base_path() . '/public/uploads/dynamic', $imageName
            );

            Image::make(base_path() . '/public/uploads/dynamic/' . $imageName, array(
                'width' => 190,
                'height' => 121,
            ))->save(base_path() . '/public/uploads/dynamic/' . $imageName);
             $dynamic->update(array('image' => $imageName));
        }
       
        Session::flash('message', 'The content was successfully added!.');
        Session::flash('flash_type', 'alert-success');

        return redirect('dynamic-contents');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id, DynamicContent $dynamicContent, Article $article)
    {
       
        $locale = LaravelLocalization::getCurrentLocale();
    
        $dynContent = $dynamicContent->find($id);

        return view('frontend.includes.dynamicContent', compact('dynContent'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id, DynamicContent $dynamic)
    {
        return view('admin.dynamics.edit')->with('dynamics', $dynamic->find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param DynamicContent $dynamic
     * @param CreateDynamicContentTable $request
     * @return Response
     */
    public function update($id, DynamicContent $dynamic, CreateDynamicContentRequest $request)
    {
          $dynamic_to_update = $dynamic->find($id);
        $uploaded_image = $request->file('image_upload');
        $parameter = $request->all();

        if (isset($uploaded_image)) {

            $ext = $uploaded_image->getClientOriginalExtension();
            $newImageName = $dynamic_to_update->id . "." . $ext;

            $uploaded_image->move(
                base_path() . '/public/uploads/dynamic/', $newImageName
            );

            Image::make(base_path() . '/public/uploads/dynamic/' . $newImageName, array(
                'width' => 774,
                'height' => 329,
            ))->save(base_path() . '/public/uploads/dynamic/' . $newImageName);
            $parameter = $request->all();
            $parameter['image'] = $newImageName;

            /* remove this field from the parameters list */
            unset($parameter['image_upload']);

            $dynamic_to_update->update($parameter);

        } else {
            $dynamic_to_update->update($request->all());
            $dynamic_to_update->update($parameter);
        }
                Session::flash('message', 'The content was successfully updated!.');
        Session::flash('flash_type', 'alert-success');

        return redirect('dynamic-contents');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id,DynamicContent $dynamic)
    {
        
        $dynamic=$dynamic->find($id);
        $dynamic->delete();
        Session::flash('message', 'The slider was successfully deleted!.');
        Session::flash('flash_type', 'alert-success');
    }

    public function displayContentOfAboutUs(DynamicContent $dynamic)
    {
        $dynContent = $dynamic->find(1);

        return view('frontend.includes.aboutUsDynamicTemplate', compact('dynContent'));
    }

    public function displayStaffDetails(DynamicContent $dynamic)
    {
        $dynContent = $dynamic->All();

        return view('frontend.includes.staffDetailTemplate', compact('dynContent'));
    }
    public function showBiodata($id){
    	$file = File::get("public/Biodatas/".$id.'.pdf');
    	$response = Response::make($file, 200);
    	$response->header('Content-Type', 'application/pdf');
    	return $response;
    
    }
}
