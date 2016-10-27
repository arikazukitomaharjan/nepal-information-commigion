<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Repository\ArticleRepository as Article;
use App\Repository\CategoryRepository as Category;
use LaravelLocalization;
use App\Repository\TagRepository as Tag;
use App\Repository\UserRepository as User;
use Folklore\Image\Facades\Image;
use App\Http\Requests\CreateArticleRequest;
use Session;
use Excel;
use Input;
use File;
use Response;

/**
 * Class ArticleController
 *
 * @package App\Http\Controllers
 */
class ArticleController extends Controller {
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
	public function index(Article $article,Category $category) {
		$articles = $article->paginate ( $this->count );
		$articles->setPath ( '' );
		$category=$category->lists ( 'name', 'id' );
		return view ( 'admin.articles.index', compact ( 'articles' ,'category') );
	}
	public function import() {
		return view ( 'admin.articles.fileImport', compact ( 'articles' ) );
	}
	public function importData(CreateArticleRequest $request, Article $article, Category $category) {
		ini_set ( 'max_execution_time', 300 );
		$input = Input::file ( 'csv_file' );
		$filename = $input->getRealPath ();
		
		Excel::load ( $filename, function ($reader) use($article, $request, $category) {
			$rows = $reader->all ();
			$rows->toArray ();
			foreach ( $rows as $row1 ) {
				foreach($row1 as $row)
				{
				$cat = $category->getCategoryByName ( $row ['category'] );
				
				$article->create ( array (
						"title_en" => $row ['title_english'],
						"title_ne" => $row ['title_nepali'],
						"description_en" => $row ['description_english'],
						"description_ne" => $row ['description_nepali'],
						"date_created" => $row ['date'],
						"type" => $row ['type'],
						"status" => $row ['status'],
						"user_id" => 1,
						"category_id" => $cat ['0']->id,
						"image" => $row ['image'],
						"docs" => $row ['docs'], 
				) );
			}
		}
		} );
		Session::flash ( 'message', 'The import was successful!.' );
		Session::flash ( 'flash_type', 'alert-success' );
		return redirect ( 'articles' );
	}
	public function export() {
		echo "export data";
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Category $category, Tag $tag) {
		return view ( 'admin.articles.create' )->with ( 'category', $category->lists ( 'name', 'id' ) )->with ( 'tags', $tag->lists ( 'name', 'id' ) );
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param CreateArticleRequest $request        	
	 * @return Response
	 */
public function store(CreateArticleRequest $request, Article $article) {
		$uploaded_file = $request->file('image');
		$parameter = $request->all();
		unset($parameter['docs']);
		$article = $article->create($parameter);	
		
		if(isset($uploaded_file))
		{
			$ext = $uploaded_file->getClientOriginalExtension();
			$imageName = $article->id . "." . $ext;
			$uploaded_file->move(
					base_path() . '/public/uploads/article', $imageName
			);
			Image::make(base_path() . '/public/uploads/article/' . $imageName, array(
			'width' => 200,
			'height' => 160,
			))->save(base_path() . '/public/uploads/article/' . $imageName);
			$article->update(array('image' => $imageName));
		}
		
			
		$uploaded_pdf_files=$request->file ( 'docs' );	
	   
		if($uploaded_pdf_files[0] != Null)
		{
			
			$fileNames="";
			$fileCount=count($uploaded_pdf_files);
			for($i=0; $i<count($uploaded_pdf_files); $i++)
			{
				
				$fileExt = $uploaded_pdf_files[$i]->getClientOriginalExtension();
				if($fileCount == '1')
				{
				$fileName = $article->id ."." . $fileExt;
				}
				else{
				$fileName = $article->id . "-" . $i . "." . $fileExt;
				}
				
				 $uploaded_pdf_files[$i]->move(
				 		base_path() . '/public/uploads/articlesPdf', $fileName
				 ); 
				 $fileNames.=$fileName;
				 if($i == count($uploaded_pdf_files)-1)
				 {
				  $fileNames.='';
				  }
				 else
				 {
				 $fileNames.=',';
				 }	 	
			}
			 $article->update ( array (
			 		'docs' => $fileNames
			 ) );
	    }
			Session::flash ( 'message', 'The article was successfully added!.' );
			Session::flash ( 'flash_type', 'alert-success' );
		
			return redirect ( 'articles' );

	}
	
	
	/**
	 * Display the specified resource.
	 *
	 * @param int $id        	
	 * @return Response
	 */
	public function show($id, Article $article) {
		$news = $article->find ( $id );
		
		return view ( 'frontend.includes.singleNews', compact ( 'news' ) );
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param int $id        	
	 * @return Response
	 */
	public function edit($id, Article $article, Category $category, Tag $tag) {
		return view ( 'admin.articles.edit' )->with ( 'article', $article->find ( $id ) )->with ( 'category', $category->lists ( 'name', 'id' ) )->with ( 'tags', $tag->lists ( 'name', 'id' ) );
		;
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param int $id        	
	 * @return Response
	 */
	public function update($id, CreateArticleRequest $request, Article $article) {
		$article->find ( $id )->update ( $request->all () );
		
		return redirect ( 'articles' );
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id        	
	 * @return Response
	 */
	public function destroy($ids, Article $article) {
	    $idsArray=explode(',',$ids);
	    
		foreach($idsArray as $id){
		$article = $article->find ( $id );
		$article->delete ();
		}
		Session::flash ( 'message', 'The articles were successfully deleted!.' );
		Session::flash ( 'flash_type', 'alert-success' ); 
		
		//return view ( 'admin.articles.index', compact ( 'articles' ) );
		return redirect ( 'articles' );
	}
	
	/**
	 *
	 * @param
	 *        	$id
	 * @param
	 *        	$category
	 * @param Article $article        	
	 * @return \Illuminate\View\View
	 */
	public function getArticlesByCategory($id, $category, Article $article) {
		$articles = $article->getArticlesByCategory ( $id, 10 );
		$articles->setPath ( '' );
		return view ( 'frontend.includes.articleList', compact ( 'articles', 'category' ) );
	}
	
	/**
	 *
	 * @param
	 *        	$id
	 * @param
	 *        	$category
	 * @param Article $article        	
	 * @return \Illuminate\View\View
	 */
	public function getSingleArticleById($id, Article $article) {
		$article = $article->getSingleArticleById ( $id );
		$articlePdfs=explode(',',$article->docs);
		return view ( 'frontend.includes.singleArticle', compact ('article','articlePdfs' ) );
	}
	
	/**
	 *
	 * @param Article $article        	
	 * @param CreateArticleRequest $request        	
	 * @return \Illuminate\View\View
	 */
	public function postSearch(Article $article, CreateArticleRequest $request) {
		//dd("test");
		 $locale = LaravelLocalization::getCurrentLocale ();
		$search_text = $request->input ( 'search_text' );
		
		$date = $request->input ( 'date');
        $type = $request->input('type');
        $articles = $article->postArticleSearch($search_text, $locale, $date, $type);

        return view('frontend.includes.searchPostResults', compact('articles'));
    } 
    
    public function uploadfile(){
       return "success";
    }
    
	public function displayPdfContent($documents){
		
		$file = File::get("public/uploads/articlesPdf/$documents");
		$response = Response::make($file, 200);
		// using this will allow you to do some checks on it (if pdf/docx/doc/xls/xlsx)
		$response->header('Content-Type', 'application/pdf');
		return $response;
}
public function articleSearch(Article $article, CreateArticleRequest $request,Category $category) {
	$locale = LaravelLocalization::getCurrentLocale ();
	$search_text = $request->input ( 'search_text' );
	$search_category = $request->input ( 'search_category' );
	
	$articles = $article->articleSearch($search_text, $search_category, $locale);
	//dd($articles);
	$category=$category->lists ( 'name', 'id' );
	return view('admin.articles.search', compact('articles','category'));
}

}