<?php namespace app\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Repository\MenuRepository as Menu;
use Illuminate\Contracts\Auth\Guard as Auth;
use App\Repository\ProfileRepository as Profile;
use App\Repository\UserRepository as User;

class AdminComposer
{
    /*
     * The menu repository implementation.
     *
     * @var MenuRepository
     */
    protected $menus;

    /*
     * The profile repository implementation.
     *
     * @var ProfileRepository
     */
    protected $profile;


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
    public function __construct(Menu $menus, Profile $profile, Auth $auth, User $user)
    {
        // Dependencies automatically resolved by service container...
        $this->menus = $menus;
        $this->profile = $profile;
        $this->auth = $auth;
        $this->user = $user;
    }

    /*
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {

        $activeUser = $this->auth->user();
        if($activeUser != Null){
        $user = $this->user->find($activeUser->id);
        
        $isAdmin = $user->hasRole(['Admin']);
        $user_id = ($isAdmin)?"%":$user->id;

        $userLists = $this->user->getAllUsers($user_id);
        
        if($this->user->hasProfile($activeUser->id)) {

            $portfolio_id = ($isAdmin)?"%":$user->profile->id;

            $portfolioLists = $this->profile->getAllProfiles($portfolio_id);
            $menus = $this->menus->getDynamicMenus();


            $view->with('menus', $menus)->with('portfolioLists', $portfolioLists);
        }
        
        $view->with('userLists', $userLists);
        }
    }
}
