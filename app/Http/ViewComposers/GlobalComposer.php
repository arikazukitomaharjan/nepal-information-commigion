<?php namespace app\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Auth\Guard as Auth;
use App\Repository\ArticleRepository as Article;
use App\Repository\CategoryRepository as Category;
use App\Repository\PhotoRepository as Photo;
use App\Repository\DynamicContentRepository as DynamicContent;


class GlobalComposer
{

    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;


    /*
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(Auth $auth, Article $article,Category $category,Photo $photo,DynamicContent $dynamic)
    {

        $this->auth = $auth;
        $this->article = $article;
        $this->category = $category;
        $this->photo = $photo;
        $this->dynamicContent=$dynamic;
        
        
    }

    /*
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        if ($this->auth->check()) {
            $activeUser = $this->auth->user();
            $view->with('user', $activeUser);
        }

        $categories = $this->category->lists('name', 'id');
        $view->with('categories', $categories);

        $importantnews =  $this->article->getArticlesByCategory(27, 7);
        $view->with('importantnews', $importantnews);

        $cartoon = $this->article->getArticlesByCategory(33, 5);
        $view->with('cartoon', $cartoon);

        $sliding_news =  $this->article->getArticlesByCategory(32, 5);
        $view->with('sliding_news', $sliding_news);
        
        $photoIndexPage=$this->photo->getSpecificPhoto();
        $view->with('photoIndexPage', $photoIndexPage);
        
        $categoriesArray = $this->category->getAllParentAndChildCategories();
        $view->with('categoriesArray', $categoriesArray);
        
        $staff_top_level = $this->dynamicContent->getTopLevelStaff();
        $view->with('staff_top_level', $staff_top_level);
        
        $staff_second_level = $this->dynamicContent->getSecondLevelStaff();
        $view->with('staff_second_level', $staff_second_level);
        
        $staff_middle_level = $this->dynamicContent->getMiddleLevelStaff();
        $view->with('staff_middle_level', $staff_middle_level);
           
    }
}