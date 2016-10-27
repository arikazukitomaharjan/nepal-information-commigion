<?php namespace App\Http\Controllers;

use App\Repository\DynamicContentRepository as DynamicContent;
use App\Repository\ArticleRepository as Article;
use App\Repository\CategoryRepository as Category;
use App\Repository\SliderRepository as Slider;
use App\Http\Requests\ContactFormRequest;

/**
 * Class FrontEndController
 * @package App\Http\Controllers
 */
class FrontEndController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }


    /**
     * @param Article $article
     * @return string
     */
    public function index(Article $article, Category $category, Slider $slider, DynamicContent $dynamic)
    {

        $headline = $article->getArticlesByPublishedDateen(5);
        $successstories = $category->find(22)->articles;
        //$successstories = array_chunk($successstories->toArray(), 2);
    // dd($successstories);
        $tabs[] = $article->getArticlesByCategory(17, 5);
        $tabs[] = $article->getArticlesByCategory(18, 5);
        $tabs[] = $article->getArticlesByCategory(19, 5);

        $sliders = $slider->all();

        $frontPage = true;

        //dynamic contents
        $dynamics = $dynamic->all();
        $about = $dynamic->find(1);
      
        $staff_top_level = $dynamic->getTopLevelStaff();
        $staff_second_level = $dynamic->getSecondLevelStaff();
        $staff_middle_level = $dynamic->getMiddleLevelStaff();

        $view = view('frontend.index',
            compact('headline', 'successstories', 'tabs',
                'dynamics', 'about', 'sliders', 'sliding_news', 'staff_middle_level', 'staff_top_level','staff_second_level'));

        return $view;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function getProfile()
    {
        return view('frontend.portfolio');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function getAboutUs(Article $article)
    {
        $articles = $article->getArticlesByPublishedDate(5);

        return view('frontend.aboutUs', compact('articles'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function getContactUs(Article $article)
    {
        $articles = $article->getArticlesByPublishedDate(5);

        return view('frontend.contactUs', compact('articles'));
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function getSingleNews($id, Article $article)
    {
        $news = $article->find($id);

        return view('frontend.includes.singleNews', compact('news'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function getAllArtists()
    {
        return view('frontend.artistList');
    }

    /**
     * @param Article $article
     * @return \Illuminate\View\View
     */
    public function getNews(Article $article)
    {

        $articles = $article->getArticlesByPublishedDate(3);
        $articles->setPath('');

        return view('frontend.news', compact('articles'));
    }

    /**
     * @param ContactFormRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postContactFormRequest(ContactFormRequest $request,Mailer $mailer){
        $formData = $request->all();
        $mailer->welcome($formData);
        return redirect('home');
    }
    public function contactUs(ContactFormRequest $request)
    {

        return redirect('dynamiccontents/2')->with('message',
            'Thank you for contacting us!! We will get back to you shortly!!');
    }
    public function getDetailsForWhatWeDo(){
    	return view('frontend.includes.whatWeDo');
    }
    public function getDetailsProcedureToRequest(){
    	return view('frontend.includes.procedureToRequest');;
    }
    public function getDetailsRightsToKnow(){
    	return view('frontend.includes.rightsToKnow');  
      }
      
      public function contact(){
      	return view('frontend.includes.contactUs');
      }
      public function sentEmail(){
      	dd("email");
      }
}