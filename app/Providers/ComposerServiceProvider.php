<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
    	
        view()->composer('admin.*','App\Http\ViewComposers\AdminComposer');
        view()->composer('*', 'App\Http\ViewComposers\GlobalComposer');


    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
