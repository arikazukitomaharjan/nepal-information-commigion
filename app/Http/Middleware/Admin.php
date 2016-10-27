<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Admin {


    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Redirect Path
     *
     * @var redirectPath
     */
    protected $redirectPath;

    /**
     * Redirect Path
     *
     * @var redirectPath
     */
    protected $redirectAfterLogout;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->redirectPath = '/home';
        $this->redirectAfterLogout = '/';
    }


    /**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{


        if (!$this->auth->check())
        {
            if ($request->ajax())
            {
                return response('Unauthorized.', 401);
            }
            else
            {
                return redirect('auth/login');
            }
        }


        return $next($request);
	}

}
