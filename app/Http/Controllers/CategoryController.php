<?php namespace App\Http\Controllers;


use App\Http\Requests;
use App\Repository\CategoryRepository as Category;
use App\Http\Requests\CreateCategoryRequest;
use Request;
use Session;

/**
 * Class CategoryController
 * @package App\Http\Controllers
 */
class CategoryController extends Controller
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
     * @param Category $Category
     * @return $this
     */
    public function index(Category $Category)
    {

        $categoriesView = $Category->paginate($this->count);
        return view('admin.artCategories.index',compact('categoriesView'));
    }


    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.artCategories.create');
    }


    /**
     * @param CreateCategoryRequest $request
     * @param Category $Category
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(CreateCategoryRequest $request, Category $Category)
    {
    	$values=$request->all();
    	
    	  if($values['menuType'] == 'Parent'){
    	  	unset($values['parentMenuType']);
    		$values['parentId']=0;
    	}
    	else {
    		$values['parentId']=$values['parentMenuType'];
    		unset($values['parentMenuType']);
    	}  
        $Category->create($values);
        Session::flash('message', 'The Category was successfully added!.');
        Session::flash('flash_type', 'alert-success');
        return redirect('categories');
    }

    /**
     * @param $id
     * @param Category $Category
     * @return $this
     */
    public function show($id, Category $Category)
    {
        //return view('artCategories.index')->with('Category', $Category->find($id));
    }

    /**
     * @param $id
     * @param Category $Category
     * @return $this
     */
    public function edit($id, Category $Category)
    {

        return view('admin.artCategories.edit')->with('category', $Category->find($id));
    }


    /**
     * @param $id
     * @param Category $Category
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, CreateCategoryRequest $request, Category $Category)
    {
    	$values=$request->all();
    	if($values['menuType'] == 'Parent'){
    		unset($values['parentMenuType']);
    		$values['parentId']=0;
    	}
    	else {
    		$values['parentId']=$values['parentMenuType'];
    		unset($values['parentMenuType']);
    	}
        $Category->find($id)->update($values);
        Session::flash('message', 'The Category was successfully edited!.');
        Session::flash('flash_type', 'alert-success');
        return redirect('categories');
    }


    /**
     * @param $id
     */
    public function destroy($id,Category $category,Article $article)
    {
      
    }

    /**
     * @param Category $Category
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getAllCategory(Category $category)
    {
        return $category->all(array('id', 'name'))->take(20);
    }
	public function getParentCategories(Category $category){
		
		 $parentCategories=$category->getParentCategories();
		$jsonData=$parentCategories->toArray();
		$parentMenuArrays=array();
		foreach($jsonData as $jsonData1){
			$singleArray=array();
			
			$singleArray['id']=$jsonData1['id'];
			$singleArray['name']=$jsonData1['name'];
			array_push($parentMenuArrays,$singleArray);
		}
	  return json_encode($parentMenuArrays);
		
	}
}