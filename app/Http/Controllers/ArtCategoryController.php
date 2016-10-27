<?php namespace App\Http\Controllers;


use App\Http\Requests;
use App\Repository\ArtCategory as ArtCategory;
use App\Http\Requests\CreateArtCategoryRequest;
use Request;
use Session;

/**
 * Class ArtCategoryController
 * @package App\Http\Controllers
 */
class ArtCategoryController extends Controller
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

        $this->count = 10;
    }

    /**
     * @param ArtCategory $artCategory
     * @return $this
     */
    public function index(ArtCategory $artCategory)
    {

        $artcategories = $artCategory->paginate($this->count);
        return view('admin.artCategories.index',compact('artcategories'));
    }


    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.artCategories.create');
    }


    /**
     * @param CreateArtCategoryRequest $request
     * @param ArtCategory $artCategory
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CreateArtCategoryRequest $request, ArtCategory $artCategory)
    {

        $artCategory->create($request->all());
        Session::flash('message', 'The Art Category was successfully added!.');
        Session::flash('flash_type', 'alert-success');
        return redirect('artcategories');
    }

    /**
     * @param $id
     * @param ArtCategory $artCategory
     * @return $this
     */
    public function show($id, ArtCategory $artCategory)
    {
        //return view('artCategories.index')->with('artCategory', $artCategory->find($id));
    }

    /**
     * @param $id
     * @param ArtCategory $artCategory
     * @return $this
     */
    public function edit($id, ArtCategory $artCategory)
    {

        return view('admin.artCategories.edit')->with('artCategory', $artCategory->find($id));
    }


    /**
     * @param $id
     * @param ArtCategory $artCategory
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, CreateArtCategoryRequest $request, ArtCategory $artCategory)
    {
        $artCategory->find($id)->update($request->all());
        Session::flash('message', 'The Art Category was successfully edited!.');
        Session::flash('flash_type', 'alert-success');
        return redirect('artcategories');
    }


    /**
     * @param $id
     */
    public function destroy($id)
    {

    }

    /**
     * @param ArtCategory $artCategory
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getAllArtCategory(ArtCategory $artCategory)
    {
        return $artCategory->all(array('id', 'name'))->take(20);
    }

}
