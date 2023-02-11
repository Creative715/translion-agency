<?php

namespace App\Providers;

use App\Models\Depage;
use App\Models\Enpage;
use App\Models\Uapage;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->menuLoad();
    }

    public function menuLoad()
    {
        View::composer(['app.includes.navua', 'app.includes.naven', 'app.includes.navde'], function ($view){
            $view->with('uapages', Uapage::all()->where('menu', 1));
            $view->with('enpages', Enpage::all()->where('menu', 1));
            $view->with('depages', Depage::all()->where('menu', 1));
        });
    }
}
