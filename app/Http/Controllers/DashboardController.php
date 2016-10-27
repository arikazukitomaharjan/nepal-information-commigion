<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard as Auth;

class DashboardController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | DashboardController
    |--------------------------------------------------------------------------
    |
    | The controller handles all the dashboard activities
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
     * @return \Illuminate\View\View
     */
    public function index(Auth $auth)
    {

        $user = $auth->user();
        return view('admin.dashboard', compact('user'));
    }


}
